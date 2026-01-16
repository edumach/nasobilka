<?php
// Funkce pro vygenerování selectu s čísly 1–10
function selectCisla($name) {
    echo "<select name=\"$name\">";
    for ($i = 1; $i <= 10; $i++) {
        echo "<option value=\"$i\">$i</option>";
    }
    echo "</select>";
}
?>

<!doctype html>
<html lang="cs">
<head>
  <title>Tabulka malé násobilky</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<h1>Tabulka malé násobilky</h1>


<form method="get">
    <p>
        Počet řádků: <?php selectCisla("a"); ?> 
        &times;
        Počet sloupců: <?php selectCisla("sloupce"); ?>
        <button type="submit">Vypočítat</button>
    </p>
</form>

<?php
if (isset($_GET["radky"]) && isset($_GET["b"])) {

    $radky   = $_GET["a"];
    $sloupce = $_GET["b"];
?>
    <table class='table table-bordered'>
        <?php
        // CYKLUS PRO ŘÁDKY
        for ($i = 1; $i <= $radky; $i++) {
            echo "<tr>";

            // CYKLUS PRO SLOUPCE
            for ($j = 1; $j <= $sloupce; $j++) {
                echo "<td>";

                // -----------------------------
                // ÚKOLY:
                // 1) vypiš příklad (např. 2 × 3)
                // 2) vypiš výsledek (např. 2 × 3 = 6)
                // -----------------------------

                echo "</td>";
            }

            echo "</tr>";
        }
        ?>
    </table>
<?php
}
?>

</div> <!-- konec kontejneru -->
</body>
</html>

