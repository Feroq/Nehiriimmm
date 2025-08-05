<?php
// Veritabanı bağlantısı
$conn = new mysqli('localhost', 'db_kullanici', 'db_sifre', 'db_adi');
if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $platform = $conn->real_escape_string($_POST['platform']);
    $username = $conn->real_escape_string($_POST['username']);
    $follower_count = (int)$_POST['follower_count'];
    $email = $conn->real_escape_string($_POST['email']);

    $sql = "INSERT INTO orders (platform, username, follower_count, email) VALUES ('$platform', '$username', $follower_count, '$email')";
    if ($conn->query($sql) === TRUE) {
        echo "<p style='color:green;'>Siparişiniz alındı, teşekkürler!</p>";
    } else {
        echo "<p style='color:red;'>Hata: " . $conn->error . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8" />
    <title>Takipçi Bot Sipariş Sitesi</title>
</head>
<body>
    <h1>Takipçi Bot Sipariş Formu</h1>
    <form method="post" action="">
        <label>Platform:</label>
        <select name="platform" required>
            <option value="TikTok">TikTok</option>
            <option value="Instagram">Instagram</option>
            <option value="YouTube">YouTube</option>
        </select><br><br>

        <label>Kullanıcı Adı:</label>
        <input type="text" name="username" required><br><br>

        <label>Takipçi Miktarı:</label>
        <input type="number" name="follower_count" min="1" required><br><br>

        <label>E-posta:</label>
        <input type="email" name="email" required><br><br>

        <button type="submit">Sipariş Ver</button>
    </form>
</body>
</html>
