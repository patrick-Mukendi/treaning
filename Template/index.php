<?php

require '../vendor/autoload.php';

use App\{
  Form,
  Session,
  Cookie,
  Select,
  Textarea,
  FileUpload,
};

use App\HTML\{
  Input,
  Radio,
  Checkbox,
  Button
};

Session::start();

Cookie::set('PC1', $_POST['username'] ?? '');
$cookie = Cookie::get('PC1', "user");

$type = isset($_POST["Gest"]) ? $_POST["Gest"] : "";
$name = isset($_POST["username"]) ? $_POST["username"] : "";
$mail = isset($_POST["email"]) ? $_POST["email"] : "";

Session::set('$_POST["Gest"]', $_POST["username"], $_POST["email"]);

$session = Session::get('Gest', 'username');
$username = $session[1];
$mail =  $session[2];
 
$form = new Form(['enctype'=>'multipart/form-data', 'action'=>FileUpload::upload("file","filesUpload"), 'method'=>'post']); 
$form->addElement(new Input('text', 'username', 'Ex:Patrick Mukendi', ['value' => $username])); 
$form->addElement(new Input('email', 'email', 'Ex:mdipatrick5@gmail.com', ['value' => $mail])); 
$form->addElement(new Textarea('comments', 'Ex:Write something...', ['class' =>'textarea'])); 
$form->addElement(new Select('country', ['us' => 'USA', 'ca' => 'Canada'], ['class' =>'dropdown']));
$form->addElement(new Radio('gender', 'Homme', true, ['class' => 'radio'])); 
$form->addElement(new Radio('gender', 'Femme', false, ['class' => 'radio']));
$form->addElement(new Checkbox('subscribe', 'yes', true, ['class' => 'checkbox']));
$form->addElement(new Checkbox('subscribe', 'no', false, ['class' => 'checkbox']));
$form->addElement(new Input('file', 'monfichier')); 
$form->addElement(new Button('button', ['type' => 'submit'], 'Submit')); 
?>

<html>
    <head>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
/>
    </head>
<body style="padding-left:400px;padding-right:400px;padding-top:50px">
 
    <h1>Bienvenue <?= $cookie ?>!!</h1>
  <?=$form->render();?>
  </body>
</html>