-- Membuat database mile stone phase 0
CREATE DATABASE mile_stone_phase0;

-- Membuat tabel registration
CREATE TABLE IF NOT EXISTS registration (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL,
  password VARCHAR(20) NOT NULL
);

-- Membuat tabel contact form
CREATE TABLE IF NOT EXISTS contact_form (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(20) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  email VARCHAR(50) NOT NULL,
  phone VARCHAR(30) NOT NULL,
  message_subject VARCHAR(50) NOT NULL,
  message VARCHAR(500) NOT NULL
);