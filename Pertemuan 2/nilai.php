<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian mahasiswa</title>
</head>
<body>
    <style>

        body {
            margin: 0;
            padding: 0;
        }

        .bungkusan {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: aqua;
            width: 450px;
            font-family: cursive;
        }

        .form {
            font-family: cursive;
        }

        .button {
            border: 1px solid;
            margin-top: 20px;
        }

        .bungkusanluar {
            justify-content: center;
            align-items: center;
            display: flex;
            
            margin-top: 40px;
        }

    </style>

    <section class="bungkusanluar">
        <div class="bungkusan">
    <h2 style="font-family:cursive;">Aplikasi penilaian mahasiswa</h2>
    <form action="" method="POST" class="form">
        <label for="mata_kuliah1">Mata Kuliah 1:</label>
        <input type="number" name="mata_kuliah1" required>
        <br>
        <label for="mata_kuliah2">Mata Kuliah 2:</label>
        <input type="number" name="mata_kuliah2" required>
        <br>
        <label for="mata_kuliah3">Mata Kuliah 3:</label>
        <input type="number" name="mata_kuliah3" required>
        <br>

        <button type="submit" class="button">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai1 = $_POST['mata_kuliah1'];
        $nilai2 = $_POST['mata_kuliah2'];
        $nilai3 = $_POST['mata_kuliah3'];

        $rata_rata = ($nilai1 + $nilai2 + $nilai3) / 3;

        $status = ($rata_rata >= 60) ? "Lulus" : "Tidak Lulus";

        echo "<h3>Hasil Penilaian</h3>";
        echo "Nilai Rata-Rata: " . number_format($rata_rata, 2) . "<br>";
        echo "Status Kelulusan: " . $status;
    }
    ?>
    </div>
    </section>
</body>
</html>