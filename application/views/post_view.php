<div id="page">
    <div id="content">
        
     <?php
       
     foreach ($posts as $post)
     {
       echo "<h2><b>".ucfirst($post['title'])."</b></h2>";
       echo '<p>'.nl2br($post['body']).'</p>';
       echo '<h2> Objavljeno: <span class="posted_date">'.$post['date'].'</span> </h2>' ;
     }  
       ?>
        
    </div>
</div>