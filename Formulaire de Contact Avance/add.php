<?php
require '../vendor/autoload.php';

use Contact\Class\ContactManager;
use App\{
  Form,
  Session,
  Cookie,
};
use App\HTML\{
  Input,
  Button
};

Session::start();
Cookie::set('PC1', $_POST['username'] ?? '');
$cookie = Cookie::get('PC1', "user");

$db = new ContactManager();
$id = isset($_POST['id']) ? $_POST['id'] : '';
$name = trim(strip_tags(isset($_POST['name']) ? $_POST['name'] : ''));
$email = trim(strip_tags(isset($_POST['email']) ? $_POST['email'] : ''));
$phone = trim(strip_tags(isset($_POST['phone']) ? $_POST['phone'] : ''));

if (!empty($name)) 
{
  $insert = $db->addData($name, $email, $phone);
}
Session::set('$_POST["Gest"]', $name, $email);
$session = Session::get('Gest', 'username');
$username = $session[1];
$mail =  $session[2];

$form = new Form(['enctype' => 'multipart/form-data', 'action' => '', 'method' => 'post']);
$form->addElement(new Input('text', 'name', 'Ex:Patrick Mukendi'));
$form->addElement(new Input('email', 'email', 'Ex:mdipatrick5@gmail.com'));
$form->addElement(new Input('tel', 'phone', 'Ex:+243 000 000 000'));
$form->addElement(new Button('button', ['type' => 'submit', 'name' => 'submit'], 'Submit'));
?>

<html>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" />
</head>
<body style="padding-left:400px;padding-right:400px;padding-top:50px"> 
  <h1 >Nouveau Contact</h1>
  <a href="index.php">Liste Contacts</a>
  <?= $form->render(); ?>
</body>
</html>