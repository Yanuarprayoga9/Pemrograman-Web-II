<!DOCTYPE html>
<html>

<head>
    <title>Loop Examples</title>
</head>

<body>
    <h2>For Loop:</h2>
    <ul>
        <?php
        for ($i = 2; $i <= 10; $i += 2) {
            echo "<li>$i</li>";
        }
        ?>
    </ul>

    <h2>While Loop:</h2>
    <ul>
        <?php
        $j = 1;
        while ($j <= 10) {
            echo "<li>$j</li>";
            $j += 2;
        }
        ?>
    </ul>
</body>

</html>