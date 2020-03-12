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

		
  <form name="search" method="post" action="search1">
    <input type="search" name="query" placeholder="Поиск">
    <input type="submit" value="Найти">
  </form>


	
 </div>

          
          <?php footer(); ?>
          
     
	  	</div>
</body>
</html>


