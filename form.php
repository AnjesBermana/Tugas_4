<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
</head>
<body>
    <div class="form-container">
        <h1>Form Pendaftaran</h1>
        <form id="registrationForm" action="process.php" method="post" enctype="multipart/form-data">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required minlength="3" placeholder="Nama Lengkap">

            <label for="nim">NIM:</label>
            <input type="number" id="nim" name="nim" required placeholder="NIM">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required placeholder="Email">

            <label for="gender">Jenis Kelamin:</label>
            <select id="gender" name="gender" required>
                <option value="">Pilih Gender</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>

            <label for="age">Usia:</label>
            <input type="number" id="age" name="age" required placeholder="Usia" min="1">

            <label for="job">Pekerjaan:</label>
            <input type="text" id="job" name="job" required placeholder="Pekerjaan">

            <label for="document">Upload File (Teks):</label>
            <input type="file" id="document" name="document" accept=".txt" required>

            <input type="submit" value="Daftar">
        </form>
    </div>
</body>
</html>
