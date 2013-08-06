<?php

$this->CI = &get_instance(); // Public property preuzet po referenci

$config['base_url'] = base_url().'blog_controller/index';
$config['total_rows'] = $this->CI->db->get('posts')->num_rows(); // Public property komunicira sa bazom preko CI jezgra
$config['per_page'] = 8;
$config['num_links'] = 3;
$config['full_tag_open'] = '<div id="my_pagination">';
$config['full_tag_close'] = '</div>';
$config['next_link'] = 'Sledeća&gt;&gt;';
$config['prev_link'] = 'Prethodna&lt;&lt;';

?>
