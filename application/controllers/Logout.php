<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends My_Controller {

   public function index()
   {
      $sess_data = [
         'id','name','email','role','is_login'
      ];
      
      $this->session->unset_userdata('$sess_data');
      $this->session->sess_destroy();
      
      redirect(base_url('/login'));
      
      
      
   }

}

/* End of file Logout.php */
