<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mata Kuliah</title>
</head>
<body>
    <h2>Tambah Mata Kuliah</h2>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <form method="post" action="index.php?page=matakuliah&action=store">
        <label>Kode MK</label><br>
        <input type="text" name="kode_mk" required><br><br>
        
        <label>Nama Mata Kuliah</label><br>
        <input type="text" name="nama_mk" required><br><br>
        
        <label>SKS</label><br>
        <input type="number" name="sks" required min="1"><br><br>
        
        <label>Semester</label><br>
        <input type="number" name="semester" required min="1"><br><br>
        
        <label>Dosen Pengampu</label><br>
        <input type="text" name="dosen_pengampu" required><br><br>
        
        <button type="submit">Simpan</button>
        <a href="index.php?page=matakuliah">Kembali</a>
    </form>
</body>
</html>