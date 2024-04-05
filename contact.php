<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Alamat email tujuan
    $to = "bayurgt1@gmail.com"; // Ganti dengan alamat email tujuan Anda

    // Subject email
    $subject = "Pesan dari $name";

    // Isi pesan email
    $body = "Nama: $name\nEmail: $email\n\nPesan:\n$message";

    // Header email
    $headers = "From: $email";

    // Kirim email
    if (mail($to, $subject, $body, $headers)) {
        // Jika email berhasil terkirim
        echo "<h2>Terima kasih telah menghubungi kami!</h2>";
        echo "<p>Terima kasih telah menghubungi kami!.</p>";
    } else {
        // Jika email gagal terkirim
        echo "<h2>Maaf, ada kesalahan saat mengirim pesan Anda.</h2>";
        echo "<p>Silakan coba lagi nanti atau hubungi kami melalui cara lain.</p>";
    }
} else {
    // Jika akses langsung ke file PHP ini, arahkan ke halaman kontak
    header("Location: contact.html");
}
?>
