<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Segiempat</title>
</head>
<body>
    
    <form method="get">
        <label>Panjang: <input type="text" name="Panjang"></label>
        <label>Lebar: <input type="text" name="Lebar"></label>
        <button type="submit">Kira</button>
    </form>

    <?php
    $result = ($_GET["Panjang"] ?? 0) * ($_GET["Lebar"] ?? 0);
    echo "<h3>Result: $result</h3>";
    ?>

</body>
</html>