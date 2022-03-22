<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trombinoscope</title>
    <link href="/assets/style.css" rel="stylesheet">
</head>

<body>
    <header>

        <div>
            <a href="/index.php">
                <img src="https://picsum.photos/50/50" class="logo" alt="logo" /> </a>
        </div>
        <nav>
            <div class="burger"><span></span></div>
            <ul class="list">
                <li><a href="/index.php">Accueil</a></li>
                <li><a href="/trombinoscope.php">Trombinoscope</a></li>
                <li><a href="/presentation.php">Présentation</a></li>
                <li><a href="/contact.php">Contact</a></li>
            </ul>
        </nav>

    </header>

    <main id="top">
        <div class="container">
            <h1>Hello World</h1>
            <p>
            <form action="trombinoscope.php" method="get">
                <div>
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="user_name">
                </div>
                <div>
                    <label for="courriel">Courriel :</label>
                    <input type="email" id="courriel" name="user_email">
                </div>
                <div>
                    <label for="message">Message :</label>
                    <textarea id="message" name="user_message"></textarea>
                </div>
                <div class="button">
                    <button type="submit">Envoyer votre message</button>
                </div>
            </form>
            </p>
        </div>
    </main>


    <script src="script.js"></script>

    <footer> <a class="footer-link" target="_blank" href="https://www.wildcodeschool.com/">Wild Code School</a>
        <a class="footer-link" target="_blank" href="https://github.com/MarysaR/Trombinoscope">GitHub </a>

        <a class="footer-link" href="#top"> Haut</a>

        <p class="copyright">© 2022 dePhants</p>
    </footer>
</body>

</html>