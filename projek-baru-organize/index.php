<?php

$huruf = "hallo dari backend";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"> </link>
    <header>
        <h1>TermosPanas</h1>
        <h2>KLik tombol ini</h2>
        <button id="TermosPanas">Klik</button> <br>

    </header>
    <main>
        <p>Dari backend</p>
        <h4>JANGAN DIKASIH TAHU</h4>
        <?php echo $huruf ?>
        <script src="js/app.js"></script>
    </main>
    <img src="image.jpg" width="255" leght="335">
</body>
</html>