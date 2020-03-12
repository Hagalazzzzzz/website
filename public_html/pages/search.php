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

        <?php
       global $mysqli;

        /* проверка соединения */
        if (mysqli_connect_errno()) {
            printf("Не удалось подключиться: %s\n", mysqli_connect_error());
            exit();
        }
        function search ($query):void
		{
            $mysqli = new mysqli("localhost", "f0381178_Recipe", "DBRecipe", "f0381178_Recipe");
            $text = '';
            $query = trim($query);
            $query = strip_tags($query);
            $query = $mysqli->real_escape_string($query);
            $result = $mysqli->query("select recipe.name from recipe inner join recipe_has_ingredient on recipe_has_ingredient.Recipe_id_Recipe = recipe.id_Recipe inner join ingredient on ingredient.id_Ingr = recipe_has_ingredient.Ingredient_id_Ingr WHERE ingredient.name LIKE '%$query%'"); // ===> Формируем строку поискового запроса
            $num = $mysqli->affected_rows;
			$text .= '<p>По вашему запросу  <strong>'.$query.'</strong>';
            $text .= ' найдено '.$num.' рецепта:</p>' ;
		
            if($num > 0){
					printf($text);
                while ($row = $result->fetch_row()) {
					
				printf ("%s ", $row[0]);
				echo nl2br ("  \n");}

    }
            else{
                $text = '<p>По вашему запросу ничего не найдено.</p>';
					printf ($text);}
		
        }


        if(isset($_POST['query'])){

            $search_result = search($_POST['query']);
            echo $search_result;  }

        ?>
    </div>


    <?php footer(); ?>


</div>
</body>
</html>