<div id="page">
    
        
       <?php echo validation_errors(); ?> 
      <?php 
      echo form_open();
     
      ?>
        Ime posta: <br />
        <input type="text" name="title" style="width: 400px"> <br /> <br />
        Post: <br />
        <textarea name="body" cols="40" rows="10" style="width: 600px; height: 300px;"> </textarea>
        <br /> <br />
        <input type="submit" name="submit" value="Snimi post" style="padding: 10px; width: 200px">
        
        <?php      echo form_close();
        
        ?>
        
     
    </div>

