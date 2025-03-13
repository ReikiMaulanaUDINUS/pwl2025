<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['nim'] = $_POST['nim'];
    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['kode'] = $_POST['kode'];
    $_SESSION['nama_matkul'] = $_POST['nama_matkul'];
    $_SESSION['sks'] = $_POST['sks'];

    header("Location: index.php"); // Redirect to avoid resubmission issues
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>Data Mahasiswa dan Mata Kuliah</h2>

    <?php if (isset($_SESSION['nim'])): ?>
        <table border="1">
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Kode Mata Kuliah</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
            </tr>
            <tr>
                <td><?php echo htmlspecialchars($_SESSION['nim']); ?></td>
                <td><?php echo htmlspecialchars($_SESSION['nama']); ?></td>
                <td><?php echo htmlspecialchars($_SESSION['kode']); ?></td>
                <td><?php echo htmlspecialchars($_SESSION['nama_matkul']); ?></td>
                <td><?php echo htmlspecialchars($_SESSION['sks']); ?></td>
            </tr>
        </table>
    <?php else: ?>
        <p>Belum ada data. Silakan tambahkan melalui form.</p>
    <?php endif; ?>

    <br>
    <a href="form.php">Tambah Data</a>
</body>
</html>
