CREATE DATABASE db_perpustakaan;

USE db_perpustakaan;

CREATE TABLE buku (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(100),
    penulis VARCHAR(100),
    tahun_terbit INT
);

INSERT INTO buku (judul, penulis, tahun_terbit)
VALUES ('Belajar PHP Dasar', 'Andi Saputra', 2021);
