document.getElementById('registrationForm').addEventListener('submit', function (event) {
    const fileInput = document.getElementById('document');
    const file = fileInput.files[0];

    // Validasi ukuran file txt harus maksimal 1MB
    if (file && file.size > 1024 * 1024) {
        alert("Ukuran file tidak boleh lebih dari 1MB.");
        event.preventDefault();
        return;
    }

    // Validasi tipe file harus .txt
    if (file && file.type !== 'text/plain') {
        alert("Hanya file dengan format .txt yang diperbolehkan anda unggah.");
        event.preventDefault();
        return;
    }
});
