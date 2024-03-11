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
            font-family: Arial, Helvetica, sans-serif;
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
            <input class="FormInput" type="number" name="Bil1" value="">
            <p>Bilangan Kedua :</p>
            <input class="FormInput" type="number" name="Bil2" value="">
            <p>Bilangan Ketiga :</p>
            <input class="FormInput" type="number" name="Bil3" value="">
            <p>Aksi</p>
          
            <div class="ActionButtons">
                <button type="submit" name="Aksi" value="Tambah" class="ActionButton" style="background-color: #1abc9c;">+</button>
                <button type="submit" name="Aksi" value="Kurang" class="ActionButton" style="background-color: #1abc9c;">-</button>
                <button type="submit" name="Aksi" value="Kali" class="ActionButton" style="background-color: #1abc9c;">×</button>
                <button type="submit" name="Aksi" value="Bagi" class="ActionButton" style="background-color: #1abc9c;">÷</button>
                <button type="submit" name="Aksi" value="Persen" class="ActionButton" style="background-color: #1abc9c;">%</button>
                <button type="submit" name="Aksi" value="rata_rata" class="ActionButton" style="background-color: #1abc9c;">x̄</button>
                <button type="submit" name="Aksi" value="Kuadrat" class="ActionButton" style="background-color: #1abc9c;">x²</button>
                <button type="submit" name="Aksi" value="Pangkat3" class="ActionButton" style="background-color: #1abc9c;">x³</button>
                <button type="submit" name="Aksi" value="SisaBagi" class="ActionButton" style="background-color: #1abc9c;">Sisa Bagi</button>
                <button type="submit" name="Aksi" value="AngkaAcak" class="ActionButton" style="background-color: #1abc9c;">Angka Acak</button>
            </div>
            <?php
            if (isset($_POST['Aksi'])) {
                $Bil1 = $_POST["Bil1"];
                $Bil2 = $_POST["Bil2"];
                $Bil3 = $_POST["Bil3"];
                $Aksi = $_POST["Aksi"];
                $Hasil = 0;
            
                if ($Aksi == "Tambah") {
                    if (!empty($Bil1) && !empty($Bil2)) {
                        $Hasil = $Bil1 + $Bil2;
                    } elseif (!empty($Bil1) && !empty($Bil3)) {
                        $Hasil = $Bil1 + $Bil3;
                    } elseif (!empty($Bil1) && !empty($Bil2) && !empty($Bil3)) {
                        $Hasil = $Bil1 + $Bil2 + $Bil3;
                    } 

                } elseif ($Aksi == "Kurang") {
                    if (!empty($Bil1) && !empty($Bil2)) {
                        $Hasil = $Bil1 - $Bil2;
                    } elseif (!empty($Bil1) && !empty($Bil3)) {
                        $Hasil = $Bil1 - $Bil3;
                    } elseif (!empty($Bil1) && !empty($Bil2) && !empty($Bil3)) {
                        $Hasil = $Bil1 - $Bil2 - $Bil3;
                    } 
                    
                } elseif ($Aksi == "Kali") {
                    if (!empty($Bil1) && !empty($Bil2)) {
                        $Hasil = $Bil1 * $Bil2;
                    } elseif (!empty($Bil1) && !empty($Bil3)) {
                        $Hasil = $Bil1 * $Bil3;
                    } elseif (!empty($Bil1) && !empty($Bil2) && !empty($Bil3)) {
                        $Hasil = $Bil1 * $Bil2 * $Bil3;
                    } 

                } elseif ($Aksi == "Bagi") {
                    if ($Bil2 == 0) {
                        echo "Tidak bisa dibagi dengan nol";
                    } elseif (!empty($Bil1) && !empty($Bil2)) {
                        $Hasil = $Bil1 / $Bil2;
                    } elseif (!empty($Bil1) && !empty($Bil3)) {
                        $Hasil = $Bil1 / $Bil3;
                    } elseif (!empty($Bil1) && !empty($Bil2) && !empty($Bil3)) {
                        $Hasil = $Bil1 / $Bil2 / $Bil3;
                    }

                } elseif ($Aksi == "Persen") {
                    if (!empty($Bil1) && !empty($Bil2)) {
                        $Hasil = ($Bil1 * $Bil2) / 100;
                    } elseif (!empty($Bil1) && !empty($Bil3)) {
                        $Hasil = ($Bil1 * $Bil3) / 100;
                    } elseif (!empty($Bil1) && !empty($Bil2) && !empty($Bil3)) {
                        $Hasil = ($Bil1 * $Bil2 * $Bil3) / 100;
                    } 

                } elseif ($Aksi == "rata_rata") {
                    if (!empty($Bil1) && !empty($Bil2)) {
                        $Hasil = ($Bil1 + $Bil2) / 2;
                    } elseif (!empty($Bil1) && !empty($Bil3)) {
                        $Hasil = ($Bil1 + $Bil3) / 2;
                    } elseif (!empty($Bil1) && !empty($Bil2) && !empty($Bil3)) {
                        $Hasil = ($Bil1 + $Bil2 + $Bil3) / 3;
                    } 

                } elseif ($Aksi == "Kuadrat") {
                    if (!empty($Bil1) && !empty($Bil2)) {
                        $Hasil = ($Bil1 * $Bil2);
                    } elseif (!empty($Bil1) && !empty($Bil3)) {
                        $Hasil = ($Bil1 * $Bil3);
                } elseif ($Aksi == "Pangkat3") {
                    $Hasil = $Bil1 * $Bil1 * $Bil1;
                    }  

                } elseif ($Aksi == "SisaBagi") {
                    if ($Bil2 == 0) {
                        echo "Tidak bisa menghitung sisa bagi dengan nol";
                    } elseif (!empty($Bil1) && !empty($Bil2)) {
                        $Hasil = $Bil1 % $Bil2;
                    } elseif (!empty($Bil1) && !empty($Bil3)) {
                        $Hasil = ($Bil1 % $Bil3);
                    } elseif (!empty($Bil1) && !empty($Bil2) && !empty($Bil3)) {
                        $Hasil = ($Bil1 % $Bil2 % $Bil3);
                    }
                    
                } elseif ($Aksi == "AngkaAcak") {
                    if (!empty($Bil1) && !empty($Bil2)) {
                       $Hasil = rand($Bil1, $Bil2); 
                    } elseif (!empty($Bil1) && !empty($Bil3)) {
                        $Hasil = rand($Bil1, $Bil3);
                    }
                    
                }
            
                echo '<input class="FormInput" type="number" name="Hasil" value="' . $Hasil . '" readonly>';
            }
            ?>
        </div>
    </form>
</body>

</html>