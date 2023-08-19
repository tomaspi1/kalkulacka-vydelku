<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Můj PHP web s menu</title>
    <style>
        /* Základní styly pro záhlaví */
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1rem;
        }

        /* Styly pro menu */
        nav {
            background-color: #444;
            text-align: center;
            padding: 0.5rem 0;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 1rem;
        }

        /* Zarovnání textu v hlavní části obsahu */
        main {
            text-align: center;
            margin: 2rem;
        }
    </style>
    <script>
        // Jednoduché JavaScriptové upozornění při načtení stránky
        window.onload = function() {
            alert("Vítejte na mé webové stránce!");
        };
    </script>
</head>
<body>
    <header>
        <h1>Vítejte na mé PHP webové stránce</h1>
    </header>
    <nav>
        <a href="#">Domů</a>
        <a href="#">O nás</a>
        <a href="#">Služby</a>
        <a href="#">Kontakt</a>
    </nav>
    <main>
        <?php
        echo "<p>Tento obsah je generován pomocí PHP.</p>";
        ?>
    </main>
</body>
</html>
