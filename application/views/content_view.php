

<div id="page">

   
        <?php 
        
           echo $this->pagination->create_links();
           foreach ($posts as $post){
               echo '<h2 class="title"><b><a href="posts/'.str_replace(' ','_',$post['title']).'_id_'.$post['id'].'">'.ucfirst($post['title']).'</a> </b> </h2><span class="meta">Postavljen : '.$post['date'].'</span>';
               echo '<p>'.character_limiter($post['body'],255).'<h3><a href="posts/'.str_replace(' ','_',$post['title']).'_id_'.$post['id'].'">Opširnije</a></h3>'.br().'</p>';
               echo '<hr style="color:#c00;background-color:#c00;" />';
               echo '<div id="hrl"> </div>';
           }
          echo $this->pagination->create_links();
        ?>
  
</div>
