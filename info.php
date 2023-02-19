<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <?php
    $nested = array("web" => array(array("nom" =>"php","lien" => "https://www.php.net/ ","avis"=>"*****" ),array("nom" =>"html","lien" => "https://www.w3schools.com/html/default.asp","avis"=>"****" ),array("nom" =>"JavaScript","lien" => "https://www.javascript.com/ ","avis"=>"**" ),array("nom" =>"css","lien" => "https://www.w3schools.com/css/ ","avis"=>"****" )),"db"=>array(array("nom" =>"mysql","lien" => "https://www.mysql.com/ ","avis"=>"*****" ),array("nom" =>"PostgreSQL","lien" => "https://www.postgresql.org/ ","avis"=>"*****" ),array("nom" =>"oracle","lien" => "https://www.oracle.com/","avis"=>"****" ),array("nom" =>"db2","lien" => "https://www.ibm.com/products/db2 ","avis"=>"****" )));
    if($_GET['opt']=="db"){
       
        
    
        echo '<div class="container mt-5">';
        echo '<div class="row">';
        echo '<div class="col-sm-4">';
   
    
    
  
        for ($j=0;$j<4;$j++){
        for( $i=0;$i<count(array_keys($nested["db"][$j]));$i++){
            echo array_keys($nested["db"][$j])[$i].'<br>';
            echo '<hr>';
    
    
        }
         
        echo '</div>';
        echo '<div class="col-sm-4">';
        echo '<h3>values</h3>';
         for( $i=0;$i<count(array_values($nested["db"][$j]));$i++){
            echo array_values($nested["db"][$j])[$i].'<br>';
            echo '<hr>';
    
    
        }
    }
        

    }
    else{
        echo '<div class="container mt-5">';
        echo '<div class="row">';
        echo '<div class="col-sm-4">';
        echo '<h3>keys</h3>';
       
    
    
    
  
        for ($j=0;$j<4;$j++){
        for( $i=0;$i<count(array_keys($nested["web"][$j]));$i++){
            echo array_keys($nested["web"][$j])[$i].'<br>';
            echo '<hr>';
    
    
        }
         
        echo '</div>';
        echo '<div class="col-sm-4">';
        echo '<h3>values</h3>';
         for( $i=0;$i<count(array_values($nested["web"][$j]));$i++){
            echo array_values($nested["web"][$j])[$i].'<br>';
            echo '<hr>';
    
    
        }
    }
        

    }

    
    echo '</div>';

    echo '</div>';
    echo '</div>';
    ?>
    
   

  </body>
</html>