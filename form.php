<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>





    <form action="thanks.php" method="post">
        <div>
            <label for="nom" style="display:block;">Nom :</label>
            <input type="text" id="nom" name="username" style="width:200px;" required>
        </div>
        <div>
            <label for="prenom" style="display:block;">Prenom :</label>
            <input type="text" id="nom" name="firstname" style="width:200px;" required>
        </div>
        <div>
            <label for="courriel" style="display:block;">Courriel :</label>
            <input type="email" id="courriel" name="user_email" style="width:200px;" required>
        </div>
        <div>
            <label for="sujet" style="display:block;">Sujet :</label>
            <select id="sujet" name="user_subject" style="width:200px; text-align:center;" required>
                <option value="" disabled selected>--Choississez votre sujet--</option>
                <option value="SAV">SAV</option>
                <option value="Support">Support</option>
                <option value="Autre">Autre</option>
            </select>
        </div>
        <div>
            <label for="phone" style="display:block;">Telephone :</label>
            <input type="tel" id="phone" name="user_phone" style="width:200px;">
        </div>
        <div>
            <label for="message" style="display:block;">Message :</label>
            <textarea id="message" name="user_message" style="width:200px;" required></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer votre message</button>
        </div>
    </form>

</body>

</html>