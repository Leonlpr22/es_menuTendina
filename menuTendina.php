<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select name="filmpreferito" id="filmPreferiti">
    <?php
        $film = ["The mask", "Limitless", "Notte da leoni", "Django", "The wolf of wall street"];

        for($i = 0; $i < count($film); $i++){
            $value = 'f' . ($i + 1);
            echo "<option value='$value'> $film[$i]</option>";
        }
    ?>
    </select>
</body>
</html>
