<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends Base_Controller {
	function __construct(){
        parent::__construct(array(
            'table'=>'base/users',
            'view_dir'=>"user"
        ));
    }
    
    function gets($kind)
    {

        $pgi_style ="style_golfpass";
        // $data['panels'] = $this->users_model->gets_with_pgi(array("u.kind"=>$kind),$pgi_style);
        // var_dump($data['panels']);
        // $this->_template("shop/user/panel/gets",$data,'golfpass');
    }


}