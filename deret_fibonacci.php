<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deret Fibonacci</title>
</head>

<body bgcolor="gray" text="black">
        <h2>Aplikasi Deret Fibonacci Dengan PHP</h2>
        <hr>
        <form action="" method="get">
            <div>
                <table>
                    <tr>
                        <td> Input ke-1
                        <td><input type="number" name="input1" placeholder="masukkan bilangan ke-1..." required></td>
                        </td>
                    </tr>
                    <tr>
                        <td>Input ke-2
                        <td><input type="number" name="input2" placeholder="masukkan bilangan ke-2..." required></td>
                        </td>
                    </tr>
                    <tr>
                        <td>Deret ke-
                        <td><input type="number" name="input3" placeholder="max sampai deret ke 100" required></td>
                        </td>
                    </tr>
                </table>
            </div>
            <input type="submit" value="Submit">
        </form>
        <hr>
        <h3>Hasil Deret Bilangan Fibonacci</h3>

        <?php

        echo $_GET['input1'] . " " . $_GET['input2'];

        for ($i = 2; $i < $_GET['input3']; $i++) {
            $output = $_GET['input2'] + $_GET['input1'];
            echo " $output";

            $_GET['input1'] = $_GET['input2'];
            $_GET['input2'] = $output;
        }
        ?>
</body>

</html>