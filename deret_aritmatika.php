<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deret Aritmatika</title>
</head>

<body bgcolor="gray" text="black">
    <h2>Deret Aritmatika</h2>
    <hr>
    <form action="" method="get">
        <div>
            <table>
                <tr>
                    <td> Bilangan ke-1
                    <td><input type="number" name="input1" placeholder="Masukan Bilangan ke-1" required></td>
                    </td>
                </tr>
                <tr>
                    <td> Bilangan ke-2
                    <td><input type="number" name="input2" placeholder="Masukan Bilangan ke-2"  required></td>
                    </td>
                </tr>
                <tr>
                    <td>Suku ke-n yang anda cari
                    <td><input type="number" name="input3" placeholder="Masukan Suku ke-n"  required></td>
                    </td>
                </tr>
            </table>
        </div>
        <input type="submit" value="Submit">
        <hr>
    </form>
    <h3>Hasil Deret Bilangan Aritmatika</h3>
    <?php
    echo $_GET['input1'] . " " . $_GET['input2'];
    $selisih = $_GET['input2'] - $_GET['input1'];
    for ($i = 2; $i < $_GET['input3']; $i++) {
        $hasil = $_GET['input2'] + $selisih;
        echo " $hasil";

        $_GET['input2'] = $hasil;
    }
    ?>
</body>

</html>