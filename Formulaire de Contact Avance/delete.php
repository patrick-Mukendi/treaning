<?php

require '../vendor/autoload.php';
use Contact\Class\Contact;
use Contact\Class\ContactManager;

$contact = new Contact();
$db = new ContactManager();
$contact->setId($_GET['id']);
$delete = $db->delete($_GET['id']);

header('Location: index.php');
exit;
