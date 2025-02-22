<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Penentuan Waktu</title>
</head>
<body>
    <h1>Penentuan Waktu</h1>
    <form method="post">
        <label for="jam">Masukkan Jam (HH:MM):</label>
        <input type="text" id="jam" name="jam" required>
        <button type="submit">Cek Waktu</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jam = $_POST['jam'];
        $waktu = explode(":", $jam);
        $jamInt = (int)$waktu[0];
        $menitInt = (int)$waktu[1];

        if ($jamInt >= 0 && $jamInt < 24 && $menitInt >= 0 && $menitInt < 60) {
            if ($jamInt >= 0 && $jamInt < 4) {
                echo "Waktu $jam = Dini hari";
            } elseif ($jamInt >= 4 && $jamInt < 10) {
                echo "Waktu $jam = Pagi";
            } elseif ($jamInt >= 10 && $jamInt < 15) {
                echo "Waktu $jam = Siang";
            } elseif ($jamInt >= 15 && $jamInt < 17.5) {
                echo "Waktu $jam = Sore";
            } elseif ($jamInt >= 17.5 && $jamInt < 18.5) {
                echo "Waktu $jam = Petang";
            } else {
                echo "Waktu $jam = Malam";
            }
        } else {
            echo "Waktu tidak valid. Masukkan jam antara 00:00 - 23:59.";
        }
    }
    ?>
</body>
</html>