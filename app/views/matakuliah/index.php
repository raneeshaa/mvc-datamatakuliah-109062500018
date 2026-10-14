<?php
/** @var array $matakuliah */
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mata Kuliah</title>
    <!-- Bootstrap 5 CSS & Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center py-3">
                        <h4 class="mb-0 fw-bold"><i class="bi bi-book-half me-2"></i>Daftar Mata Kuliah</h4>
                        <a href="index.php?page=matakuliah&action=create" class="btn btn-light btn-sm fw-semibold">
                            <i class="bi bi-plus-circle me-1"></i>Tambah Data
                        </a>
                    </div>
                    <div class="card-body p-4">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped align-middle mb-0">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Kode MK</th>
                                        <th>Nama Mata Kuliah</th>
                                        <th class="text-center">SKS</th>
                                        <th class="text-center">Semester</th>
                                        <th>Dosen Pengampu</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (empty($matakuliah)): ?>
                                        <tr>
                                            <td colspan="6" class="text-center text-muted py-4">Belum ada data mata kuliah.</td>
                                        </tr>
                                    <?php else: ?>
                                        <?php foreach ($matakuliah as $mk): ?>
                                        <tr>
                                            <td><span class="badge bg-secondary"><?= htmlspecialchars($mk['kode_mk']) ?></span></td>
                                            <td class="fw-semibold"><?= htmlspecialchars($mk['nama_mk']) ?></td>
                                            <td class="text-center"><?= htmlspecialchars($mk['sks']) ?></td>
                                            <td class="text-center"><?= htmlspecialchars($mk['semester']) ?></td>
                                            <td><?= htmlspecialchars($mk['dosen_pengampu']) ?></td>
                                            <td class="text-center">
                                                <a href="index.php?page=matakuliah&action=edit&id=<?= $mk['id'] ?>" class="btn btn-warning btn-sm me-1">
                                                    <i class="bi bi-pencil-square"></i> Edit
                                                </a>
                                                <form method="post" action="index.php?page=matakuliah&action=delete" style="display:inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus mata kuliah ini?')">
                                                    <input type="hidden" name="id" value="<?= $mk['id'] ?>">
                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                        <i class="bi bi-trash"></i> Hapus
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>