<?php 
    require_once(__DIR__ . '/vendor/autoload.php');   
    use \Mailjet\Resources;
    $mj = new \Mailjet\Client('95e34560381d4210dc5647c60b7044f4','ade12fd89827abcae1e52a401d4203cb',true,['version' => 'v3.1']);


    if(!empty($_POST['name']) && !empty($_POST['subject']) && !empty($_POST['email']) && !empty($_POST['message'])){
        $name = ($_POST['name']);
        $subject = ($_POST['subject']);
        $email = ($_POST['email']);
        $message = ($_POST['message']);

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
                    'Email' => "lifa96.kg@gmail.com",
                    'Name' => "Kong Marketing"
                ]
                ],
                'Subject' => "$subject", 
                'HTMLPart' => "$email,  $message",
            ]
            ]
        ];
            $response = $mj->post(Resources::$Email, ['body' => $body]);
            $response->success() && var_dump($response->getData());
            header('Location: index.php');
        }
        else{
            echo "Email non valide";
        }

    } else {
        header('Location: index.php');
        die();
    }
?>    