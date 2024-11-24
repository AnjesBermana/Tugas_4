<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $nim = $_POST['nim'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $job = $_POST['job'];
    $document = $_FILES['document'];

    if (empty($name) || empty($nim) || empty($email) || empty($gender) || empty($age) || empty($job)) {
        echo "Semua kolom form  harus anda isi.";
        exit;
    }

    if ($document['error'] !== UPLOAD_ERR_OK) {
        echo "Terjadi kesalahan saat mengupload file.";
        exit;
    }

    $fileSize = $document['size'];
    $fileType = $document['type'];
    $fileTmpName = $document['tmp_name'];

    if ($fileSize > 1024 * 1024) {
        echo "Ukuran file terlalu besar, maksimal 1MB.";
        exit;
    }

    if ($fileType !== 'text/plain') {
        echo "Hanya file .txt yang diperbolehkan.";
        exit;
    }

    $fileContent = file_get_contents($fileTmpName);

    session_start();
    $_SESSION['formData'] = [
        'name' => $name,
        'nim' => $nim,
        'email' => $email,
        'gender' => $gender,
        'age' => $age,
        'job' => $job,
        'fileContent' => nl2br(htmlspecialchars($fileContent)),
        'userAgent' => $_SERVER['HTTP_USER_AGENT'],
        'remoteAddress' => $_SERVER['REMOTE_ADDR']
    ];

    header("Location: result.php");
    exit;
}
?>
