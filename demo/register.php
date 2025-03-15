<?php
include 'includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
    $role = $_POST["role"]; // 'editor', 'admin', 'superadmin'

    $sql = "INSERT INTO users (username, password, role) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $password, $role);
    
    if ($stmt->execute()) {
        echo "Kayıt başarılı! <a href='login.php'>Giriş yap</a>";
    } else {
        echo "Hata: " . $conn->error;
    }
}
?>

<form method="POST">
    <input type="text" name="username" placeholder="Kullanıcı Adı" required>
    <input type="password" name="password" placeholder="Şifre" required>
    <select name="role">
        <option value="editor">Editor</option>
        <option value="admin">Admin</option>
        <option value="superadmin">Super Admin</option>
    </select>
    <button type="submit">Kayıt Ol</button>
</form>
