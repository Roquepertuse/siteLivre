<?php 

require 'CRUD.php';

$crud = new CRUD();
// appel a la fonction read
$events = $crud->read();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/base.css">
    <title>Page Admin</title>
</head>
<body>
    <div class="d-flex justify-content-evenly align-items-center">
        <h2> Liste des Événements </h2>
        <a class="btn btn-success w-25 " href="create.php?id="> Ajouter un événement </a>
    </div>
    <main class="container">
        <table class="table w-100">
            <tr>
                <th>ID</th>
                <th>PICTURE</th>
                <th>TITLE</th>
                <th>DESCRIPTION</th>
                <th>DATE/HEURE</th>
                <th>ACTION</th>
                </tr>

            <?php foreach ($events as $evenements):  ?>
                <tr>
                    <td><?php echo $evenements['id'] ?></td>
                    <td><?php echo $evenements['picture'] ?></td>
                    <td><?php echo $evenements['title'] ?></td>
                    <td class="w-50" style="columns: auto 10rem;"> <?php echo $evenements['description'] ?></td>
                    <td> <?php echo date('Y m d H:i',strtotime($evenements['date'])) ?></td>
                    <td>
                        <a class="btn btn-primary w-100" href="update.php?id=<?php echo $evenements['id']; ?>"> Modifier </a>
                        <a class="btn btn-danger w-100 mt-3" href="delete.php?id=<?php echo $evenements['id']; ?>"> Supprimer</a> 
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </main>
</body>
</html>