
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mozijegy foglalás</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="nevkod"> Farkas Tamás - NEPTUN PLPJEB</div>


    <div class="doboz">
        <h1> Mozijegy foglalás</title>

        <h2> Film - Akció Mozi</h2>
        
        <form id="urlap" action="feldolgoz.php" method="post">
            <div class="bal">
                <label> Név: </label>
                <input type="text" id="nev" name="nev">

                <br><br>

                <label> E-mail: </label>
                <input type="text" id="email" name="email">

                <br><br>

                <label> Jegyek: </label>
                <input type="text" id="jegyek" name="jegyek">

                <br><br>
                <label> Nap: </label>
                <select id="nap" name="nap">
                     <option value="">Válasszon!</option>
                     <option value="hétfő">hétfő</option>
                     <option value="kedd">kedd</option>
                     <option value="szerda">szerda</option>
                     <option value="csütörtök">csütörtök</option>
                     <option value="péntek">péntek</option>
                     <option value="szombat">szombat</option>
                     <option value="vasárnap">vasárnap</option>
                </select>
                <br><br>
                 <button type="submit">Küldés</button>        
            </div>
        </form>
    </div>
</body>
</html>

