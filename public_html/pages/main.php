<!DOCTYPE html>
<html>
<?php
head('Главная');

    ?>

   <body>
     
      <div id="content">
        <?php head_menu(); 
		
          sidebar();
          ?>
          
          
          
          <div id="main">
            <div id="news">
             <div id="news1">Новости</div>
              <div id="news2"><img id="image" src="/resource/images/smilik2.png" width="140" height="140" alt=""><div id="newstext">Сессия близко!</div></div>
              <div id="news2"><img id="image" src="/resource/images/smilik2.png" width="140" height="140" alt=""><div id="newstext">Я удивлен</div></div>
              <div id="news2"><img id="image" src="/resource/images/smilik2.png" width="140" height="140" alt=""><div id="newstext">Все круто!</div></div>
              </div>
          </div>
          
          <?php footer(); ?>
          
      </div>
       
   </body>
  </html>