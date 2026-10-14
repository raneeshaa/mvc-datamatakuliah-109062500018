<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mata Kuliah</title>
    <!-- Bootstrap 5 CSS & Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-success text-white py-3">
                        <h4 class="mb-0 fw-bold"><i class="bi bi-plus-square me-2"></i>Tambah Mata Kuliah</h4>
                    </div>
                    <div class="card-body p-4">
                        <form method="post" action="index.php?page=matakuliah&action=store">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Kode MK</label>
                                <input type="text" name="kode_mk" class="form-control" placeholder="Contoh: SI301" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Nama Mata Kuliah</label>
                                <input type="text" name="nama_mk" class="form-control" placeholder="Contoh: Pemrograman Web Native" required>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">SKS</label>
                                    <input type="number" name="sks" class="form-control" placeholder="3" min="1" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Semester</label>
                                    <input type="number" name="semester" class="form-control" placeholder="3" min="1" required>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Dosen Pengampu</label>
                                <input type="text" name="dosen_pengampu" class="form-control" placeholder="Nama Dosen dan Gelar" required>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="index.php?page=matakuliah" class="btn btn-secondary">
                                    <i class="bi bi-arrow-left me-1"></i>Kembali
                                </a>
                                <button type="submit" class="btn btn-success">
                                    <i class="bi bi-save me-1"></i>Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>