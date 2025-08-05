<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    if ($_POST['admin'] == 'admin' && $_POST['fero123'] == 'fero123') {
        $_SESSION['logged_in'] = true;
    } else {
        ?>
        <form method="post" action="">
            <label>Kullanıcı Adı:</label>
            <input type="text" name="username" required><br><br>
            <label>Şifre:</label>
            <input type="password" name="password" required><br><br>
            <button type="submit">Giriş</button>
        </form>
        <?php
        exit;
    }
}

// Veritabanı bağlantısı
$conn = new mysqli('localhost', 'db_kullanici', 'db_sifre', 'db_adi');
if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

// Siparişleri çek
$sql = "SELECT * FROM orders ORDER BY order_date DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8" />
    <title>Admin Paneli - Siparişler</title>
</head>
<body>
    <h1>Siparişler</h1>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Platform</th>
            <th>Kullanıcı Adı</th>
            <th>Takipçi Miktarı</th>
            <th>E-posta</th>
            <th>Durum</th>
            <th>Sipariş Tarihi</th>
        </tr>
        <?php if ($result && $result->num_rows > 0) {
            while($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= htmlspecialchars($row['platform']) ?></td>
                    <td><?= htmlspecialchars($row['username']) ?></td>
                    <td><?= $row['follower_count'] ?></td>
                    <td><?= htmlspecialchars($row['email']) ?></td>
                    <td><?= htmlspecialchars($row['status']) ?></td>
                    <td><?= $row['order_date'] ?></td>
                </tr>
        <?php }
        } else { ?>
            <tr><td colspan="7">Hiç sipariş yok.</td></tr>
        <?php } ?>
    </table>
    <p><a href="logout.php">Çıkış Yap</a></p>
</body>
</html>
