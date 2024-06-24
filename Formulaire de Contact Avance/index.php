<?php
require '../vendor/autoload.php';
use Contact\Class\ContactManager;
use App\{
    Session,
};

Session::start();

$db = new ContactManager();
$members = $db->readAllData();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <title>Formulaire de Contact</title>
</head>

<body>

    <div id="blur" class="blur"></div>
    <div id="corps">
        <div>
            <h1>Liste Contact</h1> 
                <a type="button" id="btnListeContact" href="add.php" ><i class="material-icons">add</i>Nouveau Contact</a>
        </div>
        <table id="border" >
            <thead >
                <tr >
                    <th>Id <hr></th> 
                    <th>Nom<hr> </th> 
                    <th>Email<hr> </th> 
                    <th>Tel<hr></th> 
                    <th>#<hr></th> 
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($members)) {
                    $count = 0;
                    foreach ($members as $row) {
                        ?>
                        <tr>
                            <td id="Id"><?php echo $row['id']; ?><hr></td>
                            <td><?php echo $row['name']; ?> <hr></td>
                            <td><?php echo $row['email']; ?> <hr></td>
                            <td><?php echo $row['phone']; ?> <hr></td>
                            <td id="action">
                                <a id="button" type="button" href="edit.php?id=<?php echo $row['id'] ?>"><i class="material-icons">edit</i></a>
                                <a id="button" type="button" href="delete.php?action_type=delete&id=<?php echo $row['id']; ?>"  onclick="return confirm('Voulez-vous supprimer?');"> <i class="material-icons">delete</i></a>
                                </td>
                           
                        </tr>
                    <?php }
                } else { ?>
                    <tr>
                        <td colspan="6">Aucun contact...</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>