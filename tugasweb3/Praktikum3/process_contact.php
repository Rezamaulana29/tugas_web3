<?php
// Memeriksa apakah form telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Simpan data ke file (opsional, hanya untuk simulasi)
    $data = "Nama: $name\nEmail: $email\nPesan: $message\n\n";
    file_put_contents('contact_messages.txt', $data, FILE_APPEND);

    // Redirect ke halaman terima kasih
    header('Location: thank_you.php');
    exit();
} else {
    // Jika form tidak dikirim, redirect ke halaman kontak
    header('Location: contact.php');
    exit();
}
?>