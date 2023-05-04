<?php
    session_start (); 

    // après insertion ou mise à jour 
    $_SESSION [ 'status' ] = "" ; 

   define("DB_SERVER", "localhost");
   define("DB_PORT",   "3306");
   define("DB_NAME",   "candidatdb");
   define("DB_USER",   "root");
   define("DB_PASSWORD",   "");
   define("DB_PREFIX", "");
  
 
   try {
       $db = new PDO("mysql:host=" . DB_SERVER . "; port=" . DB_PORT . "; dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
        if(isset($_POST['submit'])){
            $nom=htmlspecialchars( $_POST['nom']);
            $prenom=htmlspecialchars($_POST['prenom']);
            $mail=htmlspecialchars($_POST['mail']);
            $motiv=htmlspecialchars($_POST['motiv']);
            $target_dir = "cv/";
            $target_file = $target_dir . basename($_FILES["file"]["name"]);
            //$file=htmlspecialchars($_FILES['file']);
           require ('test.php');    
           $target_dir = "cv/";
           $chemin = $target_dir . basename($_FILES["file"]["name"]);
            $sth = $db->prepare("
                INSERT INTO candidats(prenom, nom, mail, motiv, chemin)
                VALUES(:prenom, :nom, :mail, :motiv, :chemin)");
            $sth->bindParam(':prenom',$prenom);
            $sth->bindParam(':nom',$nom);
            $sth->bindParam(':mail',$mail);
            $sth->bindParam(':motiv',$motiv);
            $sth->bindParam(':chemin',$chemin);
           // $sth->bindParam(':file',$file    );
            $sth->execute();
            header("location: index.php");
        }else {
            header("location: index.php#formu");
    }
    }catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
?>