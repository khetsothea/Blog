
<?php

if ($this->session->userdata('logged_in'))
{
    $data = array(
    
    'id' => 'menu',
    'menus' => array(
        'menu1' => 'naslovna',
        'menu2' => 'napravi_post',
        'menu3' => 'o_meni',
        'menu4' => 'o_blogu',
        'menu5' => 'kontakt'
    )
);
echo menu($data);
}
 else {
     $data = array(
    
    'id' => 'menu',
    'menus' => array(
        'menu1' => 'naslovna',        
        'menu2' => 'o_meni',
        'menu3' => 'o_blogu',
        'menu4' => 'kontakt'
    )
);
echo menu($data);
}

?>
