<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Můj PHP web s obsahem</title>
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
        <?php
        $menuItems = array(
            "Domů" => "#",
            "O nás" => "#",
            "Služby" => "#",
            "Kontakt" => "#"
        );

        echo "<ul>";
        foreach ($menuItems as $title => $link) {
            echo "<li><a href=\"$link\">$title</a></li>";
        }
        echo "</ul>";
        ?>
    </nav>
    <main>
        <h2>O nás</h2>
        <p>Jsme tým nadšených vývojářů a designérů, kteří tvoří moderní a kreativní webové stránky.</p>
        <h2>Naše služby</h2>
        <ul>
            <li>Webový design</li>
            <li>Vývoj webových aplikací</li>
            <li>Responzivní design</li>
            <li>SEO optimalizace</li>
        </ul>
        <h2>Kontakt</h2>
        <p>Máte-li nějaké dotazy, kontaktujte nás na <a href="mailto:info@example.com">info@example.com</a>.</p>
    </main>
</body>
</html>
