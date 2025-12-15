<?php
if (!isset($_SESSION['is_login'])) {
    header("Location: /lab11_php_oop/index.php/user/login");
    exit;
}

$db = new Database();
$message = "";

// proses ganti password
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password_baru = $_POST['password'];

    if (!empty($password_baru)) {
        // enkripsi password
        $password_hash = password_hash($password_baru, PASSWORD_DEFAULT);

        // update password user
        $username = $_SESSION['username'];
        $sql = "UPDATE users SET password='$password_hash' WHERE username='$username'";
        $db->query($sql);

        $message = "Password berhasil diubah";
    } else {
        $message = "Password tidak boleh kosong";
    }
}
?>

<h2>Profil User</h2>

<?php if ($message): ?>
    <p style="color:green"><?= $message ?></p>
<?php endif; ?>

<table border="0" cellpadding="5">
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><?= $_SESSION['nama']; ?></td>
    </tr>
    <tr>
        <td>Username</td>
        <td>:</td>
        <td><?= $_SESSION['username']; ?></td>
    </tr>
</table>

<hr>

<h3>Ubah Password</h3>

<form method="post">
    <label>Password Baru</label><br>
    <input type="password" name="password" required>
    <br><br>
    <button type="submit">Simpan</button>
</form>
