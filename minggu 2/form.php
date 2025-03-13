<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Mahasiswa</title>
</head>
<body>
    <h2>Form Input Mahasiswa dan Mata Kuliah</h2>
    <form action="index.php" method="post">
        <h3>Mahasiswa</h3>
        <label>NIM:</label>
        <input type="text" name="nim" required><br><br>
        
        <label>Nama:</label>
        <input type="text" name="nama" required><br><br>
        
        <h3>Mata Kuliah</h3>
        <label>Kode Mata Kuliah:</label>
        <input type="text" name="kode" required><br><br>

        <label>Nama Mata Kuliah:</label>
        <input type="text" name="nama_matkul" required><br><br>

        <label>Jumlah SKS:</label>
        <input type="number" name="sks" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
