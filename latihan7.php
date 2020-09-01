<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form</title>
</head>

<body>
    <form action="" method="POST">
        Nilai <input type="text" name="nilai">
        <input type="submit" name="tombol_hasil" value="Hasil">
    </form>
    <?php
    if (isset($_POST['tombol_hasil'])) {
        $nilai = $_POST['nilai'];
        if ($nilai == 50) {
            echo "Nilai adalah : " . $nilai;
        } elseif ($nilai == 90) {
            echo "Nilai adalah : " . $nilai;
        } else {
            echo "Nilai yang dimasukkan tidak sesuai!";
        }
    }
    ?>
</body>

</html>