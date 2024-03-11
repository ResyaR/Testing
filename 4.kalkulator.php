<!DOCTYPE html>
<html>

<head>
    <title>Kalkulator</title>
    <style type="text/css" media="screen">
        body {
            background: #F2F2F2;
        }

        .Kal {
            width: 350px;
            height: auto;
            border: 1px solid black;
            margin: 80px auto;
            padding: 10px;
            border-radius: 10px;
            background-color: black;
        }

        h1 {
            text-align: center;
            color: white;
        }

        .FormInput {
            padding: 10px;
            display: block;
            width: 94%;
            font-size: 15px;
            border-radius: 5px;
            border: none;
        }

        .ActionButtons {
            margin-top: 10px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .ActionButton {
            margin: 5px;
            padding: 10px;
            font-weight: bold;
            width: 30%;
            font-size: 18px;
            background-color: #3498db;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .ActionButton:hover {
            background-color: #2980b9;
        }

        p {
            font-weight: bold;
            margin-bottom: 5px;
            color: white;
        }

        .FormInput[name="Hasil"] {
            font-size: 20px;
        }
    </style>
</head>

<body>
    <form method="POST">
        <div class="Kal">
            <h1>Kalkulator Sederhana</h1>
            <hr>
            <p>Bilangan Pertama :</p>
            <input class="FormInput" type="number" name="Bil1" value="0">
            <p>Bilangan Kedua :</p>
            <input class="FormInput" type="number" name="Bil2" value="0">
            <p>Aksi</p>
          
            <div class="ActionButtons">
                <button type="submit" name="Aksi" value="Tambah" class="ActionButton" style="background-color: #e74c3c;">+</button>
                <button type="submit" name="Aksi" value="Kurang" class="ActionButton" style="background-color: #e67e22;">-</button>
                <button type="submit" name="Aksi" value="Kali" class="ActionButton" style="background-color: #27ae60;">×</button>
                <button type="submit" name="Aksi" value="Bagi" class="ActionButton" style="background-color: #9b59b6;">÷</button>
                <button type="submit" name="Aksi" value="Persen" class="ActionButton" style="background-color: #f1c40f;">%</button>
                <button type="submit" name="Aksi" value="rata_rata" class="ActionButton" style="background-color: #34495e;">x̄</button>
                <button type="submit" name="Aksi" value="Kuadrat" class="ActionButton" style="background-color: #3498db;">x²</button>
                <button type="submit" name="Aksi" value="Pangkat3" class="ActionButton" style="background-color: #1abc9c;">x³</button>
                <button type="submit" name="Aksi" value="SisaBagi" class="ActionButton" style="background-color: #e74c3c;">Sisa Bagi</button>
                <button type="submit" name="Aksi" value="AngkaAcak" class="ActionButton" style="background-color: #e67e22;">Angka Acak</button>
            </div>
            <?php
            if (isset($_POST['Aksi'])) {
                $Bil1 = $_POST["Bil1"];
                $Bil2 = $_POST["Bil2"];
                $Aksi = $_POST["Aksi"];
                $Hasil = 0;

                if ($Aksi == "Tambah") {
                    $Hasil = $Bil1 + $Bil2;
                } elseif ($Aksi == "Kurang") {
                    $Hasil = $Bil1 - $Bil2;
                } elseif ($Aksi == "Kali") {
                    $Hasil = $Bil1 * $Bil2;
                } elseif ($Aksi == "Bagi") {
                    if ($Bil2 == 0) {
                        echo "Tidak bisa dibagi dengan nol";
                    } else {
                        $Hasil = $Bil1 / $Bil2;
                    }
                } elseif ($Aksi == "Persen") {
                    $Hasil = ($Bil1 * $Bil2) / 100;
                } elseif ($Aksi == "rata_rata") {
                    $Hasil = ($Bil1 + $Bil2) / 2;
                } elseif ($Aksi == "Kuadrat") {
                    $Hasil = $Bil1 * $Bil1;
                } elseif ($Aksi == "Pangkat3") {
                    $Hasil = $Bil1 * $Bil1 * $Bil1;
                } elseif ($Aksi == "SisaBagi") {
                    if ($Bil2 == 0) {
                        echo "Tidak bisa menghitung sisa bagi dengan nol";
                    } else {
                        $Hasil = $Bil1 % $Bil2;
                    }
                } elseif ($Aksi == "AngkaAcak") {
                    $Hasil = rand($Bil1, $Bil2);
                }

                echo '<input class="FormInput" type="number" name="Hasil" value="' . $Hasil . '" readonly>';
            }
            ?>
        </div>
    </form>
</body>

</html>
