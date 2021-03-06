<?php defined('BASEPATH') OR exit('no direct script access allrowed');

class Product_categories_Model extends Board_Model{
    function __construct(){
        parent:: __construct('product_categories');
    }
    function revert_recursive($id)
    {
        
        $row=$this->_get($id);
        $data = array($row);

        if($row !== null)
        {
            $parent_id =$row->parent_id;
            $data_2 =$this->revert_recursive($parent_id);
            if($data_2[0] !== null)
                $data = array_merge($data,$data_2);
        }
        
        return $data;
        
    }


    function gets_with_pgi($where_obj,$pgi_style)
    {
        $menu_id =  $this->product_categories_model->_get($where_obj,array("id"))->id;
        return parent::_gets_with_pgi_func(
            $pgi_style,
            function() use ($where_obj,$menu_id)
            {   
                
                $this->db->where("parent_id",$menu_id);
                $num_rows = $this->db->count_all_results('product_categories');
                return $num_rows;
            },
            function($offset,$per_page) use($menu_id)
            {
                $this->db->limit($per_page,$offset);
                $this->db->order_by("sort","asc");
                return $categories=  parent::_gets(array("parent_id"=>$menu_id));        
            },
            null,
            array("per_page"=>50,"is_numrow"=>false)
        );
    }
    function gets_by_product_id($product_id)
    {
        $this->db->select(" r.*, c.*, r.id 'id',r.sort,c.id 'cate_id'");
        $this->db->from('ref_cate_product as r');
        $this->db->join("$this->table c","r.cate_id = c.id","LEFT");
        $this->db->where("product_id",$product_id);

        $this->db->order_by("r.sort","asc");
        $rows =$this->db->get()->result();

        return $rows;
    }

    function _recursive_tree($parent,$deep)
    {
        $data =array($parent);
        $deep += 1;
        $this->db->select("* , $deep as deep");
        $this->db->from("$this->table");
        $this->db->where('parent_id',$parent->id);
        $childs=$this->db->get()->result();
        for($i= 0 ; $i < count($childs) ; $i++)
        {
           $data= array_merge($data,$this->_recursive_tree($childs[$i],$deep)) ;
        }

        return $data;
    }
    function gets_by_recursive_tree($id=null)
    {
        $this->db->select("*, '0' as deep");
        $this->db->from("$this->table");
        if($id === null)
            $this->db->where('parent_id','0');
        else
            $this->db->where('id',$id);
        $result=$this->db->get()->result();

        $data = array();
        for($i= 0 ; $i < count($result) ; $i++)
        {
           $data=  array_merge($data, $this->_recursive_tree($result[$i] , 0));
        }
        return $data;

    }


    
}