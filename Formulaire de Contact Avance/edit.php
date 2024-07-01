<?php
require '../vendor/autoload.php';
use Contact\Class\{
  ContactManager,
  Contact
};
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
$id_str = '';

Cookie::set('PC1', $_POST['name'] ?? '');
$cookie = Cookie::get('PC1', "user");

$db = new ContactManager();

$id = isset($_GET['id']) ? $_GET['id'] : '';
$name = trim(strip_tags(isset($_POST['name']) ? $_POST['name'] : ''));
$email = trim(strip_tags(isset($_POST['email']) ? $_POST['email'] : ''));
$phone = trim(strip_tags(isset($_POST['phone']) ? $_POST['phone'] : ''));

if (!empty($name)) 
{
  $update =  $db->updateDate($id, $name, $email, $phone);
  if ($update) 
  {
    header("Location: index.php"); 
    exit();
  }
}

Session::set('$_POST["Gest"]', $name, $email);
$session = Session::get('Gest', 'username');
$username = $session[1];
$mail =  $session[2];

$form = new Form(['enctype' => 'multipart/form-data','class'=>'form', 'action' => '', 'method' => 'post','id'=>'border']);
$form->addElement(new Input('text', 'name', 'Ex:Patrick Mukendi', ['required']));
$form->addElement(new Input('email', 'email', 'Ex:mdipatrick5@gmail.com',['required']));
$form->addElement(new Input('tel', 'phone', 'Ex:+243 000 000 000',['required']));
$form->addElement(new Button('button', ['id'=>"btnListeContact1",'type' => 'submit', 'name' => 'submit'], 'Submit'));
?>

<html>
<head> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">  </head>
<body style="padding-left:400px;padding-right:400px;padding-top:50px">
<div id="blur" class="blur"></div>
<div id="corps">
    <h1>Modifier Contact!!</h1>
    <a typ="button" id="btnListeContact" href="index.php">Liste Contact</a>
    <?= $form->render(); ?>
</body>
</html>