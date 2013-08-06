<?php

class blog_controller extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->config->load('pagination', TRUE);
        $this->load->model('blog_model');
    }
    
    function index()
    {
        $this->home();
    }
    
    function home()
    {
        $per_page = $this->config->item('per_page', 'pagination');
        $row = $this->uri->segment(3);
        
        $data['posts'] = $this->blog_model->get_posts($per_page, $row);
        
            $this->load->view('header_view');
            $this->load->view('nav_view');
            $this->load->view('content_view', $data);
            $this->load->view('footer_view');
    }
    
  
}

?>
