<!DOCTYPE html>
<html>
<?php
head('Видео');
    ?>

   <body>
     
      <div id="content">
        <?php head_menu(); 
          sidebar();
          ?>
          
          <div id="main">
              <div id="video">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/ngRtNhaVxB8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
          </div>
          
          <?php footer(); ?>
          
      </div>
       
   </body>
  </html>