<?php
include_once 'Form.php';
include_once 'HTML/Input.php';
include_once 'HTML/Button.php';
include_once 'Cookie.php';
include_once 'Textarea.php';
include_once 'Select.php';
include_once 'FileUpload.php';
include_once 'HTML/Radio.php';
include_once 'Cookie.php';

function addCookie()
{
    isset($_POST['username']) ? Cookie::set('PC1', $_POST['username']) : NULL;
    echo Cookie::get('PC1', "user");
    
}



$form = new Form(['enctype'=>'multipart/form-data', 'action'=>FileUpload::upload("Patrick","HTML"), 'method'=>'post']); 
$form->addElement(new Input('text', 'username', 'JohnDoe')); 
$form->addElement(new Input('email', 'email')); 
$form->addElement(new Textarea('comments', 'Write something...', ['class' =>'textarea'])); 
$form->addElement(new Select('country', ['us' => 'USA', 'ca' => 'Canada'], ['class' =>'dropdown']));
$form->addElement(new Radio('gender', 'Homme', false, ['class' => 'radio'])); 
$form->addElement(new Radio('gender', 'Femme', true, ['class' => 'radio']));
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
<body>
  <?=$form->render(); addCookie(); ?>
  </body>
</html>