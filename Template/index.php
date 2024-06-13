<?php
require_once 'forme.php';

$form = new Form($_POST);

?>

<form action="#" methode="post">
<?php

echo $form->input('username');
echo $form->input('password');
echo $form->submit();
?>

</form>