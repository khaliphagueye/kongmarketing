<?php 
    require_once(__DIR__ . '/vendor/autoload.php');   
    use \Mailjet\Resources;
    $mj = new \Mailjet\Client('95e34560381d4210dc5647c60b7044f4','ade12fd89827abcae1e52a401d4203cb',true,['version' => 'v3.1']);


    if(!empty($_POST['name']) && !empty($_POST['subject']) && !empty($_POST['email']) && !empty($_POST['message'])){
        $name = htmlspecialchars($_POST['name']);
        $subject = htmlspecialchars($_POST['subject']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $body = [
            'Messages' => [
            [
                'From' => [
                'Email' => "$email",
                'Name' => "$name"
                ],
                'To' => [
                [
                    'Email' => "khaliphag9@gmail.com",
                    'Name' => "khalipha"
                ]
                ],
                'Subject' => "$subject", 
                'HTMLPart' => " $message",
            ]
            ]
        ];
            $response = $mj->post(Resources::$Email, ['body' => $body]);
            $response->success();
            echo "Email envoyé avec succès !";
        }
        else{
            echo "Email non valide";
        }

    } else {
        header('Location: index.php');
        die();
    }