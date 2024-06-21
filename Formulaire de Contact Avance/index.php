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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact</title>
</head>

<body style="padding-top:50px">
    <div>
        <div>
            <h1>Liste Contact</h1>
                <a href="add.php" >Nouveau Contact</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Tel</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($members)) {
                    $count = 0;
                    foreach ($members as $row) {
                        ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $row['id'] ?>">Edit</a>
                                <a href="delete.php?action_type=delete&id=<?php echo $row['id']; ?>"  onclick="return confirm('Voulez-vous supprimer?');">Delete</a>
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