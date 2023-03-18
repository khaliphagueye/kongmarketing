<?php
   
    define("DB_SERVER", "localhost");
    define("DB_PORT",   "3306");
    define("DB_NAME",   "candidatdb");
    define("DB_USER",   "root");
    define("DB_PASSWORD",   "");
    define("DB_PREFIX", "");
    try {
        $db = new PDO("mysql:host=" . DB_SERVER . "; port=" . DB_PORT . "; dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
        if(isset($_POST['submit']) ){
          $image=( $_FILES['image']);
          $sth = $db->prepare("insert into `images`(nom, size, type1, bin) VALUES(?,?,?,?)");
          $sth->execute(array($_FILES["image"]["name"],$_FILES["image"]["size"],$_FILES["image"]["type"],file_get_contents($_FILES["image"]["tmp_name"])));
        }
     }    catch(PDOException $e){
          echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
      }

?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <title>Document</title>
</head>
<body>
<form method="post" action ="" encytype="multipart/form-data">
  <div class="mb-3">
    <label for="file" class="form-label">Fichier</label>
    <input type="file" class="form-control" id="file" name="image">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>