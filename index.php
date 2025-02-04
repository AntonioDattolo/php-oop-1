<?php
include __DIR__ . "/model/model.php";


$movies = [
    new movie("Terrifier", "2016", "7", "ENG"),
    new movie("Underwater", "2020", "6", "ENG"),
    new movie("Omen - L'Origine Del Presagio", "2024", "8", "ENG"),
    new movie("The Nun II", "2023", "9", "ENG")
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/vue@3.4.27/dist/vue.global.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <title>#####</title>
</head>

<body class="myBg">
    <header class="container">
        <h1>OOP</h1>
    </header>
    <main class="container">
        <section>
            <ul>
                <h5>Lista Film</h5>
                <?php foreach ($movies as $movie) { ?>
                    <li><?= $movie->print() ?></li>
                <?php } ?>
            </ul>
        </section>
    </main>
    <!-- <script src="./js/main.js"></script> -->
</body>

</html>