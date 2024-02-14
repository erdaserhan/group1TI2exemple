<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="Group2ti2exemple | Livre d'or"/>
    <meta name="author" content="Michaël Pitz"/>
    <title>Group2ti2exemple | Livre d'or</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="img/favicon.ico"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/style.css" rel="stylesheet"/>
</head>
<body>
<!-- Responsive navbar-->
<?php
include "menu.html.php";

var_dump($_GET, $_POST);
?>
<!-- Page content-->
<div class="container">
    <div class="text-center mt-5">
        <h1>Group2ti2exemple | Livre d'or</h1>
        <p class="lead">Laisser moi votre avis sur mes travaux</p>
    </div>
    <div>
        <?php
        if (isset($message)) {
            ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $message; ?>
            </div>
            <?php
        }
        ?>
    </div>


    <div class="col-8 offset-2">
        <?php
        foreach ($comments as $commentaire) {
            ?>
            <div class="card">
                <div class="card-header">
                    <?php echo $commentaire['date_heure']; ?> | <?php echo $commentaire['titre']; ?>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $commentaire['nom']; ?></h5>
                    <p class="card-text"><?php echo $commentaire['texte']; ?></p>
                </div>
            </div>
            <?php
        }
        ?>
<hr>
    <form action="" method="POST" name="or">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nom</label>
            <input name='nom' type="text" class="form-control" id="exampleFormControlInput1" placeholder="Votre nom"
                   required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput2" class="form-label">Email address</label>
            <input name='courriel' type="email" class="form-control" id="exampleFormControlInput2"
                   placeholder="name@example.com" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput3" class="form-label">Titre</label>
            <input name='titre' type="text" class="form-control" id="exampleFormControlInput3" placeholder="Titre"
                   required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea name='texte' class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
        </div>
        <input class="btn btn-primary" type="submit" value="Envoyer">
    </form>
    </div>
</div>
</div>
<!-- Bootstrap core JS-->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/MyJS.js"></script>
</body>
</html>
