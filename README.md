# Malá násobilka (PHP)


Živá ukázka: [https://php.edumach.cz/mala-nasobilka.php](https://php.edumach.cz/mala-nasobilka.php) 

**Co skript dělá**

* uživatel vybere **dvě čísla (1–10)**,
* po odeslání formuláře se:
  * vygeneruje požadovanou tabulku
  * do buběk vypočítá a zobrazí výsledek např. `7 × 4 = 28` 
  * PHP kód se opět vykonává **na serveru** a generuje HTML.

## Příprava

Obsahem cvičení je pomocí klonování repozitáře z GitHubu zprovoznit jednoduchý web na serveru TuX a **dokončit jej podle zadání**.

1. Přihlas se **v terminálu** na server TuX a přesuň se do adresáře `~/www`
2. Gitem naklonuj repozitář `https://github.com/edumach/nasobilka`
3. Tím vznikne adresář `~/www/nasobilka/`

    ```
    $ cd www
    $ git clone https://github.com/edumach/nasobilka
    $ cd nasobilka
    ```
4. Zkontroluj funkčnost webu na URL `https://tux.panska.cz/~10XPrijmeniJ/nasobilka`



## Obsah souboru `index.php`

### Vlastní funkce pro generování [rozbalovací nabídky](https://www.w3schools.com/html/tryit.asp?filename=tryhtml_elem_select) 

```php
<?php
function selectCisla($name) {
    echo "<select name=\"$name\">";
    for ($i = 1; $i <= 10; $i++) {
        echo "<option value=\"$i\">$i</option>";
    }
    echo "</select>";
}
?>
```

**Vysvětlení:**

* `function` → definice vlastní funkce
* `$name` → název pole formuláře
* `for` → cyklus od 1 do 10
* funkce **vypisuje HTML kód**

Funkce zatím **nic nepočítá**, jen generuje `<select>`.

## Vstupní formulář

```php
<form method="get">
  <p>
    Počet řádků: <?php selectCisla("a"); ?> 
    &times;
    Počet sloupců: <?php selectCisla("b"); ?>
    <button type="submit">Vypočítat</button>
  </p>
</form>
```

**Vysvětlení:**

* funkce `selectCisla()` se volá **dvakrát**
* vzniknou **dva rozbalovací seznamy**
* formulář se odešle metodou `GET`


## Převzetí dat z formuláře s kostrou tabulky

```php
<?php
if (isset($_GET["radky"]) && isset($_GET["sloupce"])) {

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
```

**Vysvětlení:**

* `$_GET` → data z formuláře
* `isset()` → ověření, že proměnná existuje
* `$a`, `$b` → vybraná čísla


# Úkol

Doplňte do označeného místa:

1. výpočet součinu
2. výpis příkladu
3. výpis výsledku

Např. ve tvaru:

```
7 × 4 = 28
```

**Nápověda**:

* použij proměnnou `$vysledek`
* výpis proveď pomocí `echo`
* HTML můžeš psát přímo do `echo`


## Odevzdání

Aplikace bude fungovat podle zadání a bude dostupná na zadané URL adrese.
 