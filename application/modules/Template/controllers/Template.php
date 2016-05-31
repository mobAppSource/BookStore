<?php

class Template extends MY_Controller
{
    function __construc()
    {
        parent::__construct();
    }
    
    function call_admin_template($data = NULL)
    {
        $this->load->view('admin_template_v', $data);
    }
}