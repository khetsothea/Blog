<?php

class blog_model extends CI_Model
{
    function get_posts($per_page, $row)
    {
        $this->db->limit($per_page, $row);
        $this->db->order_by('date', 'desc');
        
        $query = $this->db->get('posts');
        if ($query)
        {
            return $result = $query->result_array();
            
            return TRUE;
        }
 else     return FALSE;
                
        
    }
    
    function save_post()
    {
        $data = array(
            
            'title' => $this->input->post('title'),
            'body' => $this->input->post('body')           
        );
        
        $query = $this->db->insert('posts', $data);
        if ($query)
        {
            return TRUE;
        }
        else            return FALSE;
    }
    function prikazi_post($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('posts');
        if ($query->num_rows > 0)
        {
            return $query->result_array();
            return TRUE;
        }
 else     return FALSE;
    }
    
    function provera_lozinke($user, $pass)
    {
        $this->db->where('username', $user);
        $this->db->where('password', md5($pass));
        
        $query = $this->db->get('users');
        if ($query->num_rows() == 1)
        {
            return $query->result();
            return TRUE;
        }
        else            return FALSE;
    }

}

?>
