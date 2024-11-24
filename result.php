<?php
session_start();

if (!isset($_SESSION['formData'])) {
    echo "Data tidak ditemukan.";
    exit;
}

$data = $_SESSION['formData'];

function parseUserAgent($userAgent) {
    $browser = "Tidak Diketahui";
    $os = "Tidak Diketahui";

    if (strpos($userAgent, 'Windows') !== false) {
        $os = 'Windows';
    } elseif (strpos($userAgent, 'Mac') !== false) {
        $os = 'Mac OS';
    } elseif (strpos($userAgent, 'Linux') !== false) {
        $os = 'Linux';
    } elseif (strpos($userAgent, 'Android') !== false) {
        $os = 'Android';
    } elseif (strpos($userAgent, 'iPhone') !== false) {
        $os = 'iOS';
    }

    if (strpos($userAgent, 'Firefox') !== false) {
        $browser = 'Mozilla Firefox';
    } elseif (strpos($userAgent, 'Chrome') !== false) {
        $browser = 'Google Chrome';
    } elseif (strpos($userAgent, 'Safari') !== false) {
        $browser = 'Safari';
    } elseif (strpos($userAgent, 'Edge') !== false) {
        $browser = 'Microsoft Edge';
    } elseif (strpos($userAgent, 'Trident') !== false) {
        $browser = 'Internet Explorer';
    }

    return [$browser, $os];
}

list($browser, $os) = parseUserAgent($data['userAgent']);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pendaftaran</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="result-container">
        <h1>Data Pendaftaran</h1>
        <table>
            <tr>
                <th>Nama</th>
                <td><?php echo htmlspecialchars($data['name']); ?></td>
            </tr>
            <tr>
                <th>NIM</th>
                <td><?php echo htmlspecialchars($data['nim']); ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo htmlspecialchars($data['email']); ?></td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td><?php echo htmlspecialchars($data['gender']); ?></td>
            </tr>
            <tr>
                <th>Usia</th>
                <td><?php echo htmlspecialchars($data['age']); ?></td>
            </tr>
            <tr>
                <th>Pekerjaan</th>
                <td><?php echo htmlspecialchars($data['job']); ?></td>
            </tr>
            <tr>
                <th>Isi File</th>
                <td><?php echo $data['fileContent']; ?></td>
            </tr>
            <tr>
                <th>Browser</th>
                <td><?php echo htmlspecialchars($browser); ?></td>
            </tr>
            <tr>
                <th>Sistem Operasi</th>
                <td><?php echo htmlspecialchars($os); ?></td>
            </tr>
        </table>
    </div>
</body>
</html>
