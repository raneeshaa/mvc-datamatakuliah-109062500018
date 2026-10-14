<?php
/** @var array $mk */
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Mata Kuliah</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <h2>Edit Mata Kuliah</h2>
    <form method="post" action="index.php?page=matakuliah&action=update">
        <input type="hidden" name="id" value="<?= $mk['id'] ?>">
        
        <label>Kode MK</label><br>
        <input type="text" name="kode_mk" value="<?= htmlspecialchars($mk['kode_mk']) ?>" required><br><br>
        
        <label>Nama Mata Kuliah</label><br>
        <input type="text" name="nama_mk" value="<?= htmlspecialchars($mk['nama_mk']) ?>" required><br><br>
        
        <label>SKS</label><br>
        <input type="number" name="sks" value="<?= htmlspecialchars($mk['sks']) ?>" required min="1"><br><br>
        
        <label>Semester</label><br>
        <input type="number" name="semester" value="<?= htmlspecialchars($mk['semester']) ?>" required min="1"><br><br>
        
        <label>Dosen Pengampu</label><br>
        <input type="text" name="dosen_pengampu" value="<?= htmlspecialchars($mk['dosen_pengampu']) ?>" required><br><br>
        
        <button type="submit">Update</button>
        <a href="index.php?page=matakuliah">Kembali</a>
    </form>
</body>
</html>