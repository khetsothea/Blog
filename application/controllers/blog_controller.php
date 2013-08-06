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
        $this->naslovna();
    }
    
    function naslovna()
    {
        $per_page = $this->config->item('per_page', 'pagination');
        $row = $this->uri->segment(3);
        
        $data['posts'] = $this->blog_model->get_posts($per_page, $row);
        
            $this->load->view('header_view');
            $this->load->view('menu_view');
            $this->load->view('headerbg_view');    
            $this->load->view('content_view', $data);
            $this->load->view('footer_view');
    }
    
    function napravi_post()
    {
        if ($this->session->userdata('logged_in'))
        {
            $this->form_validation->set_rules('title', 'Ime posta', 'trim|required|xss_clean|is_unique[posts.title]');
        $this->form_validation->set_rules('body', 'Post', 'trim|required|xss_clean');
        
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('header_view');
            $this->load->view('menu_view');
            $this->load->view('headerbg_view');  
            $this->load->view('create_post_view');
            $this->load->view('footer_view');
        }
        elseif ($this->blog_model->save_post() == TRUE) {
            redirect(base_url());    }
    
 else {
        echo 'error';    
    }
        }
 else {
            $this->load->view('header_view');
            $this->load->view('menu_view');
            $this->load->view('headerbg_view');    
            $this->load->view('restricted');
            $this->load->view('footer_view');
     
 }
        
        
    }
    
     function pregled_posta()
    {
        $post_num = $this->uri->segment(2);
        $pos_string = strrpos($post_num, '_'); //Nalazi poslednju poziciju znaka "_" u stringu
        $id = substr($post_num, $pos_string+1); // Tu istu poziciju uvecava za 1 i dobija ip u bazi
        
        if ($data['posts'] = $this->blog_model->prikazi_post($id))
        {
            $this->load->view('header_view');
            $this->load->view('menu_view');
            $this->load->view('headerbg_view');  
            $this->load->view('post_view', $data);
            $this->load->view('footer_view');
        }
 else {
            redirect(base_url());
 }
    }
    function o_meni()
    {
            $this->load->view('header_view');
            $this->load->view('menu_view');
            $this->load->view('headerbg_view');  
            $this->load->view('about_me');
            $this->load->view('footer_view');
    }
    
    function o_blogu()
    {
            $this->load->view('header_view');
            $this->load->view('menu_view');
            $this->load->view('headerbg_view');  
            $this->load->view('about_blog');
            $this->load->view('footer_view');
    }
            
    function uloguj_se()
    {
            $this->load->view('header_view');
            $this->load->view('menu_view');
            $this->load->view('headerbg_view');  
            $this->load->view('login');
            $this->load->view('footer_view');
    }
    
    function verify()
    {
        $this->form_validation->set_rules('username', 'Korisničko ime', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Šifra', 'trim|required|xss_clean|callback_proveri_lozinku');
        if ($this->form_validation->run())
        {
            redirect('logged_controller', 'refresh');
        }
 else {
            $this->load->view('header_view');
            $this->load->view('menu_view');
            $this->load->view('headerbg_view');  
            $this->load->view('login');
            $this->load->view('footer_view');
 }
    
    }
    
    function proveri_lozinku($user, $pass)
    {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        
        if ($result = $this->blog_model->provera_lozinke($user, $pass))
        {
           $sess_array = array();  
           foreach ($result as $rec) {
               $sess_array = array(
                   'username' => $rec->username,
               );
           }
           $this->session->set_userdata('logged_in', $sess_array);
           return TRUE;
        }
        
        $this->form_validation->set_message('proveri_lozinku', 'GREŠKA. Uneto je pogrešno korisničko ime ili lozinka. Molimo pokušajte ponovo.');
        return FALSE;
    }
    
    function izloguj_se()
    {
        $this->session->unset_userdata('logged_in');
        redirect ('blog_controller', 'refresh');
    }
    
    function kontakt()
    {
            $this->load->view('header_view');
            $this->load->view('menu_view');
            $this->load->view('headerbg_view');  
            $this->load->view('contact');
            $this->load->view('footer_view');
    }
    
    function verify_email()
    {
        $this->form_validation->set_rules('ime', 'Ime', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email');
        $this->form_validation->set_rules('poruka', 'Poruka', 'trim|required|xss_clean');
        
        if ($this->form_validation->run())
        {
            $this->load->helper('email');
            $this->load->library('email');
            
            $this->email->from(set_value("email"), set_value("ime"));
            $this->email->to("vl.radovanovic@gmail.com");
            $this->email->subject('Pitanje u vezi aplikacije blog');
            $this->email->message(set_value("poruka"));
            
            $mail = $this->email->send();          
            if ($mail)
            {
                $this->load->view('header_view');
                $this->load->view('menu_view');
                $this->load->view('headerbg_view');    
                $this->load->view('success');
                $this->load->view('footer_view');
            }
            else show_404();
        }
        
        else {
            $this->load->view('header_view');
            $this->load->view('menu_view');
            $this->load->view('headerbg_view');  
            $this->load->view('contact');
            $this->load->view('footer_view');
        }
    }
  
}

?>

