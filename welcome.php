#!/usr/local/bin/php

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Interesting</title>
</head>

<body>
    <header>
        <h1>Welcome to site with interesting content</h1>
    </header>

    <main>
        <section>
            <h2>Welcome</h2>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo '<p>Welcome ', $_POST['username'], '!!!</p>';
            }
            ?>
        </section>

        <section>
            <h2>Recent posts by users</h2>
            <p>niceGuy666 said, "check out my <a href="holiday1.html">holiday</a> <a href="holiday2.html">pictures</a>!"</p>
        </section>
    </main>

    <footer>
        <hr>
        <small>
            &copy; Victor He, 2022
        </small>
    </footer>
</body>

</html>