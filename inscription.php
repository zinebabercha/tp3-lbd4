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
    <form  method="post">
        <input type="text" name = "name" placeholder="nom">
        <br>
        <input type="date" name = "date" placeholder="date">
        <br>
        <input type="text" name = "pre" placeholder="prenom">
        <br>
        <input type="checkbox" name = "obj" >formalisme
        <br>
        <input type="checkbox" name = "obj1" >formalisme1

        <br>

        <select name="selection" size="1">
            <option value="Mme"> Mme</option>
            <option value="Mr">Mr </option>
            <option value="Mlle">Mlle </option>




        </select>
        <br>
        <input type="password" name = "pass" placeholder="password">
        <br>

        <input type="password" name = "pass1" placeholder="password">

      
        <br>

        <input type="submit" name="enregistrer" value="enregistrer">






    </form>
    <?php 
        $errors = array();

       if(isset($valider)){
        $date=$_POST["date"];
        $nom=$_POST["nom"];
        $prenom=$_POST["pre"];
        $check=$_POST["obj"];
        $check1=$_POST["obj1"];
        $choix=$_POST["selection"];
        $pass=$_POST["pass"];
        $pass2=$_POST["pass1"];
        $valider=$_POST["enregistrer"];
        if(empty($nom)){
            $errors[] = "Le nom est vide.";

           echo 'Nom  vide';}
        elseif(empty($check)){
            $errors[] = " est vide.";

            echo '  vide';}
        elseif(empty($check1)){
            $errors[] = " est vide.";

                echo '  vide';}
                elseif(empty($choix)){
                    $errors[] = " est vide.";

                    echo '  vide';}
                    elseif(empty($prenom)){
                        $errors[] = " est vide.";

           echo '  vide';}
           elseif(empty($date)){
            $errors[] = " est vide.";

           echo '  vide';}
           elseif(empty($pass)){
            $errors[] = " est vide.";

           echo '  vide';}
           elseif($pass!=$pass2){
            $errors[] = "pas identiques.";

           echo 'Les mots de passe ne sont pas identiques';}
        else{
            var_dump($_POST);

        }
        print_r($errors);

     }

    ?>

  </body>
</html>