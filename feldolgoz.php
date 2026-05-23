<?php
$nev = $POST_["nev"] ?? "";
$email = $POST_["email"] ?? "";
$jegyek = $POST_["jegyek"] ?? "";
$nap = $POST_["nap"] ?? "";

$helyesNapok = ["hétfő", "szerda", "péntek", "szombat", "vasárnap"];

$nevHelyes = strlen($nev) >=6 && strlen($nev) <=25;
$emailHelyes = filter_var($email, FILTER_VALIDATE_EMAIL);
$jegyekHelyes = is_numeric($jegyek) && $jegyek >= 1 && $jegyek <=5;
$napHelyes = in_array($nap, $helyesNapok);
 
echo "Név: " . htmlspecialchars($nev). " - " . ($nevHelyes ? "Helyes" : "Hibás!") . "<br>";
echo "E-mail: " . htmlspecialchars($email) . " - " . ($emailHelyes ? "Helyes" : "Hibás!") . "<br>";
echo "Jegyek: " . htmlspecialchars($jegyek) . " - " . ($jegyekHelyes ? "Helyes" : "Hibás!") . "<br>";
echo "Nap: " . htmlspecialchars($nap) . " - " . ($napHelyes ? "Helyes" : "Hibás!") . "<br>";

if ($nevHelyes && $emailHelyes && $jegyekHelyes && $napHelyes) {
    try {
        $kapcsolat = new PDO("mysql:host=localhost;dbname=mozi; charset = utf8", "root", "");
        $kapcsolat->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO foglalas (nev, email, jegyek, nap) VALUES (:nev, :email, :jegyek, :nap)";
        $utasitas = $kapcsolat->prepare($sql);

        $utasitas->execute([
            ":nev" => $nev,
            ":email" => $email,
            ":jegyek" => $jegyek,
            ":nap" => $nap
        ]);
        echo "<br>Sikeres mentés az adatbázisba!";
       
    } catch (PDOException $e) {
        echo "<br>Adatbázis hiba: " . $e->getMessage();
    }

}
?>
