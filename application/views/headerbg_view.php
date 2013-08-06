
</div>

    
<?php 

if (!$this->session->userdata('logged_in')) {
  
?>
  
  <div id="headerbg">
  <p class="login"><a href="<?php echo base_url().'blog_controller/uloguj_se'; ?>">ULOGUJ SE</a></p>
  <br /><br /> <br /><p class="text1">Ovaj blog pokreće CodeIgniter framework...</p>
    
</div>

<?php 
}
 else {
    
?>

<div id="headerbg">
    
    <p class="welcome"> <?php $temp = $this->session->userdata('logged_in');
               $users['username'] = $temp['username']; 
     echo 'Ulogovani ste: <b>'.$users['username'].'</b>';
 ?> </p>   
<p class="logout"><a href="<?php echo base_url().'blog_controller/izloguj_se'; ?>">LOGOUT</a></p>
   <br /><p class="text1">Ovaj blog pokreće CodeIgniter framework...</p>
    
</div>

<?php
 }
?>

