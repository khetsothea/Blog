<div id="page">
    
        
       <?php echo validation_errors(); ?> 
      <?php 
      echo form_open('blog_controller/verify');
     
      ?>
        Korisničko ime: 
        <input type="text" name="username" style="width: 200px"> <br /> <br />
        Lozinka: 
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password" style="width: 200px"> <br /> <br />
      
        <input type="submit" name="submit" value="Uloguj se" style="padding: 10px; width: 100px">
        
        <?php      echo form_close();
        
        ?>
        
     
    </div>
