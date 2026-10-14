<?php
class Matakuliah {
    public function __construct(private PDO $db) {}

    public function getAll(): array {
        $stmt = $this->db->query('SELECT * FROM mata_kuliah ORDER BY semester ASC, nama_mk ASC');
        return $stmt->fetchAll();
    }

    public function findById(int $id): array|false {
        $stmt = $this->db->prepare('SELECT * FROM mata_kuliah WHERE id = :id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    public function insert(array $data): bool {
        $sql = 'INSERT INTO mata_kuliah (kode_mk, nama_mk, sks, semester, dosen_pengampu) 
                VALUES (:kode_mk, :nama_mk, :sks, :semester, :dosen_pengampu)';
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            ':kode_mk' => $data['kode_mk'],
            ':nama_mk' => $data['nama_mk'],
            ':sks' => $data['sks'],
            ':semester' => $data['semester'],
            ':dosen_pengampu' => $data['dosen_pengampu']
        ]);
    }

    public function update(int $id, array $data): bool {
        $sql = 'UPDATE mata_kuliah 
                SET kode_mk = :kode_mk, nama_mk = :nama_mk, sks = :sks, semester = :semester, dosen_pengampu = :dosen_pengampu 
                WHERE id = :id';
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            ':id' => $id,
            ':kode_mk' => $data['kode_mk'],
            ':nama_mk' => $data['nama_mk'],
            ':sks' => $data['sks'],
            ':semester' => $data['semester'],
            ':dosen_pengampu' => $data['dosen_pengampu']
        ]);
    }

    public function delete(int $id): bool {
        $stmt = $this->db->prepare('DELETE FROM mata_kuliah WHERE id = :id');
        return $stmt->execute(['id' => $id]);
    }
}
?>