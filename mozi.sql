CREATE DATABASE mozi;

USE mozi;

CREATE TABLE foglalas(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nev VARCHAR(50),
    email VARCHAR(100),
    jegyek INT,
    nap VARCHAR(30)
);