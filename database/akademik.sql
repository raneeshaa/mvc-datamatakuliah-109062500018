CREATE DATABASE IF NOT EXISTS akademik CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE akademik;

CREATE TABLE IF NOT EXISTS mata_kuliah (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kode_mk VARCHAR(20) NOT NULL UNIQUE,
    nama_mk VARCHAR(100) NOT NULL,
    sks INT NOT NULL,
    semester INT NOT NULL,
    dosen_pengampu VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO mata_kuliah (kode_mk, nama_mk, sks, semester, dosen_pengampu) VALUES
('SI101', 'Algoritma dan Pemrograman', 4, 1, 'Dr. Alan Turing'),
('SI201', 'Basis Data Relasional', 3, 2, 'E.F. Codd, M.Kom.'),
('SI301', 'Pemrograman Web Native', 3, 3, 'Tim Berners-Lee, M.T.'),
('SI401', 'Rekayasa Perangkat Lunak', 3, 4, 'Margaret Hamilton, Ph.D.');