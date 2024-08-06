<?php 
require 'CRUD.php';
$crud = new CRUD();

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    // modification de l'id propre à lui meme 
    $id = $_POST ['id'];
    $data = array(
        'title' => $_POST['title'],
        'description' => $_POST['description'],
    );

    $crud->update($id , $data);
    
    if (isset($_SESSION['is_admin'])) {
        if ($_SESSION['is_admin'] == 1) {
            header('Location: \lesmillesconduites/actualit');
            exit();
        } else {
            header('Location: \lesmillesconduites/actualit');
            exit();
        }
    }
}

// vérifie si l'id existe
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $evenements = $crud->getEvenementsById($id);
    if ($evenements === false){
        die('Produit non trouvé');
    }
}    else {
    die('Id du produit manquant');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/base.css">
    <link rel="stylesheet" href="../public/css/registerBis.css">
    <title>Page Admin</title>
</head>

<body class="">

    <div class="page-wrapper bg-gra-01  font-poppins   d-flex flex-column justify-content-center align-items-center">
        <h2 class="pb-2 fs-1">MODIFICATION</h2>
            <div class="wrapper wrapper--w780 w-100">
                <div class="card card-3 rounded-3">

                    <div class="card-body">
                        <h2 class="title">MODIFIER L'EVENEMENT</h2>
                        <form method="POST">
                            <div class="input"> 
                                <input type="hidden" name="id" value="<?php echo $evenements->id; ?>" > 
                            </div>
                            <div class="input-group">
                                <input class="input--style-3" type="text" placeholder="TITLE" value="<?php echo $evenements->title; ?>" name="title" required>
                            </div>
                            <div class="input-group">
                                <input class="input--style-3" type="text" placeholder="DESCRIPTION" value="<?php echo $evenements->description; ?>" name="description">
                            </div>
                            <div class="p-t-10">
                            <br/>
                            <input class="btn btn--pill btn--green" type="submit" name="submit" value="Valider">
                                <!-- <button class="btn btn--pill btn--green" type="submit" name="submit">SE CONNECTER</button> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="../public/js/registerBis.js"></script>

</body>
</html>