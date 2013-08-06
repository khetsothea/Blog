<?php

class logged_controller extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->config->load('pagination', TRUE);
        $this->load->model('blog_model');
    }
    
    
    function index()
    {
            $per_page = $this->config->item('per_page', 'pagination');
            $row = $this->uri->segment(3);
        
            $data['posts'] = $this->blog_model->get_posts($per_page, $row);
            
       if ($this->session->userdata('logged_in'))
       {
 
            $this->load->view('header_view');
            $this->load->view('menu_view');
            $this->load->view('headerbg_view');    
            $this->load->view('content_view', $data);
            $this->load->view('footer_view');
       }
 else     {
            $this->load->view('header_view');
            $this->load->view('menu_view');
            $this->load->view('headerbg_view');    
            $this->load->view('restricted');
            $this->load->view('footer_view');
 }
    }                     
}
?>