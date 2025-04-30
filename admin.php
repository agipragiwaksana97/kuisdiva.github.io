<?php
// Pastikan file CSV ada dan dapat dibaca
$file = 'jawaban_pasangan.csv';
if (!file_exists($file) || !is_readable($file)) {
    die("File jawaban_pasangan.csv tidak ditemukan atau tidak dapat dibaca.");
}

// Membuka file CSV
$data = array();
if (($handle = fopen($file, 'r')) !== FALSE) {
    while (($row = fgetcsv($handle)) !== FALSE) {
        $data[] = $row;
    }
    fclose($handle);
}

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>📋 Jawaban Kuisioner Pasangan</title>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Comic Neue', cursive;
            background-color: #fff0f5;
            padding: 20px;
            max-width: 1000px;
            margin: auto;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(255, 192, 203, 0.5);
        }
        h1 {
            text-align: center;
            color: #ff69b4;
            font-size: 2.5em;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: white;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #ffb6c1;
            color: #333;
        }
        td {
            background-color: #f9f9f9;
        }
        tr:nth-child(even) td {
            background-color: #ffe6f0;
        }
        tr:nth-child(odd) td {
            background-color: #fff;
        }
        .back-btn {
            display: inline-block;
            margin: 20px auto;
            padding: 10px 30px;
            background-color: #ff69b4;
            color: white;
            font-size: 1.2em;
            text-decoration: none;
            border-radius: 15px;
        }
        .back-btn:hover {
            background-color: #ff1493;
        }
    </style>
</head>
<body>

    <h1>📋 Jawaban Kuisioner Pasangan</h1>

    <?php if (count($data) > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>Waktu Pengisian</th>
                    <th>Perasaan</th>
                    <th>Makan Apa?</th>
                    <th>Mau Date?</th>
                    <th>Tipe Date</th>
                    <th>Karakter Kartun</th>
                    <th>Destinasi</th>
                    <th>Tipe Main Game</th>
                    <th>Kalau Nyebelin</th>
                    <th>Film Random</th>
                    <th>Deskripsi Kamu</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $row): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row[0]); ?></td>
                        <td><?php echo htmlspecialchars($row[1]); ?></td>
                        <td><?php echo htmlspecialchars($row[2]); ?></td>
                        <td><?php echo htmlspecialchars($row[3]); ?></td>
                        <td><?php echo htmlspecialchars($row[4]); ?></td>
                        <td><?php echo htmlspecialchars($row[5]); ?></td>
                        <td><?php echo htmlspecialchars($row[6]); ?></td>
                        <td><?php echo htmlspecialchars($row[7]); ?></td>
                        <td><?php echo htmlspecialchars($row[8]); ?></td>
                        <td><?php echo htmlspecialchars($row[9]); ?></td>
                        <td><?php echo htmlspecialchars($row[10]); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Belum ada jawaban yang masuk.</p>
    <?php endif; ?>

    <!-- Tombol Kembali -->
    <a href="kuisioner.html" class="back-btn">Kembali ke Kuisioner</a>

</body>
</html>
