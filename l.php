<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .calculator {
            background-color: #f1f3f4;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
        }
        h1 {
            text-align: center;
            margin-top: 0;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
            font-weight: bold;
        }
        .button-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 5px;
        }
        .button-grid input[type="submit"] {
            background-color: #28a745;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 18px;
            padding: 10px;
            border-radius: 5px;
        }
        .button-grid input[type="submit"]:hover {
            background-color: #218838;
        }
        p {
            text-align: center;
            font-size: 24px;
            margin-top: 20px;
        }
        .reset-button {
            background-color: #dc3545;
            color: #fff;
            font-size: 18px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 15px;
        }
        .reset-button:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h1>Kalkulator</h1>

        <?php
        $hasil = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $angka1 = isset($_POST['angka1']) ? floatval($_POST['angka1']) : 0;
            $angka2 = isset($_POST['angka2']) ? floatval($_POST['angka2']) : 0;
            $operasi = isset($_POST['operasi']) ? $_POST['operasi'] : '';

            switch ($operasi) {
                case '+':
                    $hasil = $angka1 + $angka2;
                    break;
                case '-':
                    $hasil = $angka1 - $angka2;
                    break;
                case '*':
                    $hasil = $angka1 * $angka2;
                    break;
                case '/':
                    if ($angka2 != 0) {
                        $hasil = $angka1 / $angka2;
                    } else {
                        $hasil = "Tidak bisa membagi dengan nol";
                    }
                    break;
                case '%':
                    $hasil = ($angka1 * $angka2) / 100;
                    break;
                case 'rata-rata':
                    $hasil = ($angka1 + $angka2) / 2;
                    break;
                case '^2':
                    $hasil = $angka1 ** 2;
                    break;
                case '^3':
                    $hasil = $angka1 ** 3;
                    break;
                case 'sisa':
                    if ($angka2 != 0) {
                        $hasil = $angka1 % $angka2;
                    } else {
                        $hasil = "Tidak bisa melakukan sisa hasil bagi dengan nol";
                    }
                    break;
                default:
                    $hasil = "Operasi tidak valid";
                    break;
            }
        }
        ?>

        <form action="" method="post">
            <label for="angka1">Angka Pertama:</label>
            <input type="text" name="angka1" required>
            
            <label for="operasi">Operasi:</label>
            <select name="operasi">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
                <option value="%">%</option>
                <option value="rata-rata">Rata-rata</option>
                <option value="^2">Kuadrat</option>
                <option value="^3">Pangkat Tiga</option>
                <option value="sisa">Sisa Bagi</option>
            </select>
            
            <label for="angka2">Angka Kedua:</label>
            <input type="text" name="angka2" required>
            
            <div class="button-grid">
                <input type="submit" value="7">
                <input type="submit" value="8">
                <input type="submit" value="9">
                <input type="submit" value="/">
                
                <input type="submit" value="4">
                <input type="submit" value="5">
                <input type="submit" value="6">
                <input type="submit" value="*">
                
                <input type="submit" value="1">
                <input type="submit" value="2">
                <input type="submit" value="3">
                <input type="submit" value="-">
                
                <input type="submit" value="0">
                <input type="submit" value=".">
                <input type="submit" value="=">
                <input type="submit" value="+">
            </div>

            <div class="button-grid">
                <input type="submit" value="^2">
                <input type="submit" value="^3">
                <input type="submit" value="sisa">
                <input type="submit" value="Clear">
            </div>

            <?php
            if ($hasil !== "") {
                echo "<p>Hasil: " . $hasil . "</p>";
            }
            ?>
        </form>
    </div>
</body>
</html>
