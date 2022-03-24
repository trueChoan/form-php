<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul.form-errors {
            list-style: none;
            color: red;
        }

        article {
            font-size: larger;
            text-align: center;
            color: lightslategray;
        }
    </style>
</head>

<body>


    <?php

    //le tableau $errors est initialisé
    $errors = [];

    /* 
on vérifie si la supergloabale $_POST n'est pas vide,
c'est à dire si une soumission de formulaire a eu lieu 
*/
    if (!empty($_POST)) {
        // nettoyage des espaces
        $data = array_map('trim', $_POST);
        //protection contre les attaques XSS
        $data = array_map('htmlentities', $data);
        // on contrôle si le champ "firstname" n'est pas vide
        if (empty($data["username"])) {
            //sinon on ajoute une entrée au tableau $errors
            $errors[] = "The Name is mandatory";
        }
        if (empty($data["firstname"])) {
            //sinon on ajoute une entrée au tableau $errors
            $errors[] = "The Firstname is mandatory";
        }
        if (empty($data["user_email"])) {
            //sinon on ajoute une entrée au tableau $errors
            $errors[] = "The Email is mandatory";
        }
        if (empty($data["user_subject"])) {
            //sinon on ajoute une entrée au tableau $errors
            $errors[] = "The Subject is mandatory";
        }
        if (empty($data["user_phone"])) {
            //sinon on ajoute une entrée au tableau $errors
            $errors[] = "The Phone number is mandatory";
        }
        if (empty($data["user_message"])) {
            //sinon on ajoute une entrée au tableau $errors
            $errors[] = "The Message is mandatory";
        }
        // on cont
        // on contrôle si le champ "firstname" a une longueur de caractère inférieure à 10
        if (strlen($data['firstname']) > 10) {
            //sinon on ajoute une entrée au tableau $errors
            $errors[] = 'The firstname length should be less than 10 characters';
        }
        //... verification validité email
        if (!filter_var($data['user_email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = ' The email format is not valid';
        }
    }
    ?>

    <!-- afficher les erreurs le cas échéant -->
    <?php if (!empty($errors)) : ?>
        <ul class="form-errors">
            <?php foreach ($errors as $error) : ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else : ?>
        <p> <?= "Merci " . $_POST['username'] . " " . $_POST['firstname'] . " de nous avoir contacté à propos de " . $_POST['user_subject'] . ". <br> Un de nos conseiller vous contactera soit à l’adresse " . $_POST['user_email'] . " ou par téléphone au "  . $_POST['user_phone'] . " dans les plus brefs délais pour traiter votre demande : <br> " .  "<article><i>" . $_POST['user_message'] . "</i></article>"; ?>
        </p>

    <?php endif; ?>




</body>

</html>