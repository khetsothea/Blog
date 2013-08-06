<div id="page">
    
         
       <?php echo validation_errors(); ?> 
      <?php 
      echo form_open('blog_controller/verify_email');
    
      ?>
   
    Vaše ime: 
       <input type="text" name="ime" style="width: 200px"> <br /> <br />
       Vaš email: 
       <input type="text" name="email" style="width: 200px"> <br /> <br />

       Poruka:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;
       
       Za: vl.radovanovic [et] gmail.com
       <br />
       <textarea name="poruka" cols="40" rows="10" style="width: 600px; height: 300px;"> </textarea> 

        <br />
       
        <input type="submit" name="submit" value="Pošalji" style="padding: 10px; width: 100px">
        
        <?php      echo form_close();
        
        ?>

    </div>