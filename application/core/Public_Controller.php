<?php (defined('BASEPATH')) OR exit('No direct script access allowed');
class Public_Controller extends MX_Controller{
    
    public static $instance;
    public $view_dir;
    public $user =null;
    // public $setting =null;
    public $template_kind;
    public $table;
    public $model;

    //new
    public $moduleName= null;
    public $className =null;
    public $methodName= null;
    public $modelName =null;
    public $data;

    function __construct($args=null){
        parent::__construct();
        date_default_timezone_set('Asia/Seoul');
        self::$instance || self::$instance =& $this;

        $this->moduleName = $this->data["moduleName"]= $this->router->fetch_module();
        $this->className =$this->data["className"]=$this->router->fetch_class();
        $this->methodName =$this->data["methodName"]= $this->router->fetch_method();
        try{
			$this->modelName = "{$this->className}_model";
			$this->load->model("{$this->className}_model");
			}catch(Exception $ex){
			}

        $this->view_dir =$args['view_dir'] ?? null;
        $this->template_kind = $args['template_kind'] ?? 'base';
        if(isset($args['table'])){
            if(($idx =strpos($args['table'],'/')) >-1 )
                $this->table = substr($args['table'],$idx+1,strlen($args['table'])); 
            else
                $this->table = $args['table'];
            $this->model = "{$this->table}_model";
            $this->load->model("{$args['table']}_model");
        }
        // $this->load->database();
        $this->load->library(array("form_validation"=>"fv"));
        $this->fv->CI =& $this;
        $this->load->library("session");
        $this->load->helper("verify");
        $this->load->helper("base");
        $this->load->helper("golfpass");
        $this->load->module("template");

        if($this->session->userdata("is_login")){
            $this->load->model("base/users_model");
            $this->user =$this->users_model->_get($this->session->userdata("user_id"));
            switch($this->user->kind) {
                case "admin" :$kind = "관리자"; break;
                case "general" :$kind = "회원"; break;
                case "panel" :$kind = "패널회원"; break;
                case "corporate" :$kind = "기업회원"; break;
            }
            $this->user->kr_kind= $kind;

        }else{
            $this->user = (object)array("id"=>"0","auth"=>"0","kind"=>"손님");
        }

        $this->setting= $this->db->where('id','1')->get("setting")->row();
        
    }

    function _template($view,$data=array() , $template_kind = null)
    {
        $data +=get_view_data($view,$this->view_dir);
        $template_kind = $template_kind !== null ? $template_kind : $this->template_kind;
        $this->template->$template_kind($data);
    }
  
    function _view($view,$data =null,$sw = false)
    {
        if(strpos($view,'/') === false)
            $view = "{$this->view_dir}/$view"; 
        $this->load->view($view,$data,$sw);
    }
    

    public function _get($id){
        $row= $this->{$this->model}->_get($id);
        $data = array("row"=>$row);
        $this->_template("get",$data,"golfpass2");
    }

    public function _update($id,$data=array())
    {
        $this->_set_rules();
        if(!$this->fv->run()){
            $row=$this->{$this->model}->_get($id);
            $data["mode"] = "update/$id";
            $data["row"] = $row;
            $this->_template('addUpdate',$data);
            return false;
        }
        else{
            $this->_dbset_addUpdate();
            $this->{$this->model}->_update($id);
            return true;
        }      
    }
    
    public function _set_rules()
    {
        foreach( $_POST as $key=>$val)
        {
            $this->fv->set_rules($key,$key,'required');
        }    
    }
    function _dbset_addUpdate()
    {
        $arr = array();
        foreach( $_POST as $key=>$val)
        {
            $arr[$key]  =$this->input->post($key);            
        }
        $this->{$this->model}->_set_by_obj($arr);
    }
    public function _add($data=array(),$set_rules=true)
    {
        if($set_rules===true)
            $this->_set_rules();
        if(!$this->fv->run()){
            $data['mode'] = 'add';
            $data['row'] =(object)array();
            $this->_template('addUpdate',$data);
            return false;
        }
        else{
            $this->_dbset_addUpdate();
            $this->{$this->model}->_add();
            return true;
        }           
    }
    
    public function _ajax_delete($id){
        header("content-type:application/json");
        $this->{$this->model}->_delete($id);

        $data = array("reload"=>true);
        echo json_encode($data);
        return;
    }



}




