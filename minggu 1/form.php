<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Output</title>
    </head>
    <body>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nim = htmlspecialchars($_POST["nim"]);
            $name = htmlspecialchars($_POST["name"]);

            echo "<p>NIM: $nim</p>";
            echo "<p>Nama: $name</p>";
        } else {
            echo "<p>No data submitted.</p>";
        }
        ?>

    </body>
</html>
        