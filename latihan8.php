<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>

<body>
    <h5>Program Kalkulator Sederhana</h5>
    <hr>
    <form action="" method="POST">
        <table cellpadding="5">
            <tr>
                <td>Nilai 1</td>
                <td> : </td>
                <td> <input type="text" name="nilai1"> </td>
            </tr>
            <tr>
                <td>Nilai 2</td>
                <td> : </td>
                <td> <input type="text" name="nilai2"> </td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="submit" name="+" value="+">
                    <input type="submit" name="-" value="-">
                    <input type="submit" name="x" value="x">
                    <input type="submit" name="/" value="/">
                </td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_POST['+'])) {
        $nilai1 = $_POST['nilai1'];
        $nilai2 = $_POST['nilai2'];
        if ($nilai1 and $nilai2) {
            $hasil = $nilai1 + $nilai2;

            echo "Hasil : " . $hasil;
        } else {
            echo "Masukkan nilai terlebih dahulu";
        }
    } elseif (isset($_POST['-'])) {
        $nilai1 = $_POST['nilai1'];
        $nilai2 = $_POST['nilai2'];
        if ($nilai1 and $nilai2) {
            $hasil = $nilai1 - $nilai2;

            echo "Hasil : " . $hasil;
        } else {
            echo "Masukkan nilai terlebih dahulu";
        }
    } elseif (isset($_POST['x'])) {
        $nilai1 = $_POST['nilai1'];
        $nilai2 = $_POST['nilai2'];
        if ($nilai1 and $nilai2) {
            $hasil = $nilai1 * $nilai2;

            echo "Hasil : " . $hasil;
        } else {
            echo "Masukkan nilai terlebih dahulu";
        }
    } elseif (isset($_POST['/'])) {
        $nilai1 = $_POST['nilai1'];
        $nilai2 = $_POST['nilai2'];
        if ($nilai1 and $nilai2) {
            $hasil = $nilai1 / $nilai2;

            echo "Hasil : " . $hasil;
        } else {
            echo "Masukkan nilai terlebih dahulu";
        }
    }
    ?>
</body>

</html>