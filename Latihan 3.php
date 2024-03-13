<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Operasi Tambah Menggunakan FORM</title>
</head>
<body>
    <h3>Operasi Tambah Menggunakan Form</h3>
    <br>

    <form method="get">
        <label>No1: <input type="text" name="No1"></label>
        <label>No2: <input type="text" name="No2"></label>
        <button type="submit">Kira</button>
    </form>

    <?php
    $result = ($_GET["No1"] ?? 0) + ($_GET["No2"] ?? 0);
    echo "<h3>Result: $result</h3>";
    ?>

</body>
</html>