<?php
class MatakuliahController {
    public function __construct(private Matakuliah $model) {}

    public function index(): void {
        $matakuliah = $this->model->getAll();
        require __DIR__ . '/../views/matakuliah/index.php';
    }

    public function create(): void {
        require __DIR__ . '/../views/matakuliah/create.php';
    }

    public function store(): void {
        $data = $this->validateInput($_POST);
        $this->model->insert($data);
        header('Location: index.php?page=matakuliah');
        exit;
    }

    public function edit(): void {
        $id = (int)($_GET['id'] ?? 0);
        $mk = $this->model->findById($id);
        
        if (!$mk) {
            http_response_code(404);
            exit('Data Mata Kuliah tidak ditemukan.');
        }
        require __DIR__ . '/../views/matakuliah/edit.php';
    }

    public function update(): void {
        $id = (int)($_POST['id'] ?? 0);
        $data = $this->validateInput($_POST);
        $this->model->update($id, $data);
        header('Location: index.php?page=matakuliah');
        exit;
    }

    public function delete(): void {
        $id = (int)($_POST['id'] ?? 0);
        $this->model->delete($id);
        header('Location: index.php?page=matakuliah');
        exit;
    }

    private function validateInput(array $input): array {
        $data = [
            'kode_mk' => trim($input['kode_mk'] ?? ''),
            'nama_mk' => trim($input['nama_mk'] ?? ''),
            'sks' => (int)($input['sks'] ?? 0),
            'semester' => (int)($input['semester'] ?? 0),
            'dosen_pengampu' => trim($input['dosen_pengampu'] ?? '')
        ];

        if ($data['kode_mk'] === '' || $data['nama_mk'] === '' || $data['sks'] <= 0 || $data['semester'] <= 0 || $data['dosen_pengampu'] === '') {
            exit('Semua field wajib diisi dengan benar.');
        }
        return $data;
    }
}
?>