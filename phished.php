#!/usr/local/bin/php

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Phished</title>
</head>

<body>
    <header>
        <h1>HAHAHA</h1>
    </header>

    <main>
        <section>
            <p>You just got phished!!!</p>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo '<p>Your password is ', $_POST['pword'], '</p>';
            }
            ?>
        </section>
    </main>
</body>

</html>