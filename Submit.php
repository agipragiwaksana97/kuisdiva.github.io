<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = date("Y-m-d H:i:s") . "," .
            $_POST['q1'] . "," .
            $_POST['q2'] . "," .
            $_POST['q3'] . "," .
            $_POST['q4'] . "," .
            $_POST['q5'] . "," .
            $_POST['q6'] . "," .
            $_POST['q7'] . "," .
            $_POST['q8'] . "," .
            $_POST['q9'] . "," .
            $_POST['q10'] . "\n";

    file_put_contents("jawaban_pasangan.csv", $data, FILE_APPEND);
    echo "<h2>Terima kasih sudah mengisi kuisioner! 😍</h2>";
    echo "<a href='kuisioner.html'>Kembali ke kuisioner</a>";
} else {
    echo "Akses tidak sah.";
}
?>
