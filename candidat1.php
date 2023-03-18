
<?php
     session_start (); 

     // après insertion ou mise à jour 
     $_SESSION [ 'contact' ] = "" ; 
   define("DB_SERVER", "localhost");
   define("DB_PORT",   "3306");
   define("DB_NAME",   "candidatdb");
   define("DB_USER",   "root");
   define("DB_PASSWORD",   "");
   define("DB_PREFIX", "");
    
   try {
       $db = new PDO("mysql:host=" . DB_SERVER . "; port=" . DB_PORT . "; dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
        if(isset($_POST['submit']) ){
            $nom=htmlspecialchars( $_POST['nom']);
            $prenom=htmlspecialchars($_POST['prenom']);
            $mail=htmlspecialchars($_POST['mail']);
            $message=htmlspecialchars($_POST['message']);
            
            $sth = $db->prepare("
                INSERT INTO `contact`(prenom, nom, message, mail)
                VALUES(:prenom, :nom, :message, :mail)");
            $sth->bindParam(':prenom',$prenom);
            $sth->bindParam(':nom',$nom);
            $sth->bindParam(':message',$message);
            $sth->bindParam(':mail',$mail);
            $sth->execute();
            header("location: index.php");

            //$db->query("INSERT INTO candidat(prenom, nom, mail, motiv) VALUES('$prenom','$nom', '$mail', '$motiv')") or die($mysqli->error);
            //$_SESSION['message'] = "";
            //$_SESSION['msg_type']= "";
            //header("location: index.php");
        }
    }    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }

?>