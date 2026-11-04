<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Varga's Pizza - Rendelés Visszaigazolás</title>
    <link rel="icon" type="image/png" href="../Media/pizza.png">
    <link rel="stylesheet" href="../Styles/Style.css">
</head>
<body>

    <header>
        <img src="../Media/pizza.png" alt="Varga's Pizza Logó" class="header-logo">
        <h1>Varga's Pizza</h1>
    </header>

    <nav>
        <ul>
            <li><a href="../Index.html">Főoldal</a></li>
            <li><a href="../Pages/rolunk.html">Rólunk</a></li>
            <li><a href="../Pages/galeria.html">Galéria</a></li>
            <li><a href="../Pages/pizzaink.html">Pizzák</a></li>
            <li><a href="../Pages/rendeles.html">Rendelés</a></li>
        </ul>
    </nav>

    <div class="grid-container">
        <main style="grid-column: span 2;">
            <section>
                <h2>Köszönjük a rendelésed! 🍕</h2>
                
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nev = htmlspecialchars($_POST['nev']);
                    $telefon = htmlspecialchars($_POST['telefon']);
                    $cim = htmlspecialchars($_POST['cim']);
                    $pizza = htmlspecialchars($_POST['pizza']);
                    $meret = htmlspecialchars($_POST['meret']);
                    $megjegyzes = htmlspecialchars($_POST['megjegyzes']);

                    $arak = [
                        "margareta" => ["Margareta", 2100],
                        "sonkas" => ["Sonkás-Kukoricás", 2400],
                        "diavola" => ["Diavola (Csípős)", 2600],
                        "quattro" => ["Quattro Formaggi", 2800],
                        "varga" => ["Varga Különlegesség", 2900]
                    ];

                    $pizza_nev = isset($arak[$pizza]) ? $arak[$pizza][0] : "Ismeretlen pizza";
                    $alap_ar = isset($arak[$pizza]) ? $arak[$pizza][1] : 0;

                    if ($meret == "csaladi") {
                        $alap_ar += 1000;
                        $meret_szoveg = "Családi (45 cm)";
                    } else {
                        $meret_szoveg = "Normál (32 cm)";
                    }

                    echo "<p>Sikeresen rögzítettük a megrendelésedet. Az alábbi adatokkal fogjuk kiszállítani:</p>";
                    echo "<ul style='line-height: 1.8; font-size: 16px;'>";
                    echo "<li><strong>Név:</strong> $nev</li>";
                    echo "<li><strong>Telefonszám:</strong> $telefon</li>";
                    echo "<li><strong>Szállítási cím:</strong> $cim</li>";
                    echo "<li><strong>Kiválasztott pizza:</strong> $pizza_nev ($meret_szoveg)</li>";
                    
                    if (!empty($megjegyzes)) {
                        echo "<li><strong>Megjegyzés:</strong> $megjegyzes</li>";
                    }
                    
                    echo "</ul>";

                    echo "<div style='margin-top: 25px; padding: 15px; background-color: #fef5e7; border-left: 5px solid #e67e22; border-radius: 4px;'>";
                    echo "<h3>Fizetendő összesen: <span style='color: #d35400;'>" . number_format($alap_ar, 0, ',', ' ') . " Ft</span></h3>";
                    echo "<p style='margin: 5px 0 0 0;'>A futárnál készpénzzel, bankkártyával vagy SZÉP kártyával tudsz fizetni. A becsült kiszállítási idő: <strong>30-45 perc</strong>.</p>";
                    echo "</div>";

                } else {
                    echo "<p>Hiba történt a rendelés feldolgozása során. Kérjük, próbáld újra a rendelési oldalon.</p>";
                }
                ?>

                <div style="margin-top: 30px;">
                    <a href="../Index.html" style="background-color: #2c3e50; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px; font-weight: bold;">Vissza a főoldalra</a>
                </div>
            </section>
        </main>
    </div>

    <footer>
        <p>&copy; 2026 NHJYQC - Varga István Hunor | Web technológiák 1 Projekt</p>
    </footer>

</body>
</html>