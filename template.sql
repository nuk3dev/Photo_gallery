CREATE DATABASE 'photo_gallery' IF NOT EXISTS;


CREATE TABLE users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL
        deleted TINYINT(2) NOT NULL DEFAULT '0'
);

CREATE TABLE albums (
        id INT AUTO_INCREMENT PRIMARY KEY,
        album_name VARCHAR(255) NOT NULL,
        cover_photo VARCHAR(255) NOT NULL,
        upload TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
        deleted TINYINT(2) NOT NULL DEFAULT '0'
);

CREATE TABLE photos (
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        img_name VARCHAR(255) NOT NULL,
        album_id INT NOT NULL
        deleted TINYINT(2) NOT NULL DEFAULT '0'
);

INSERT INTO accounts (username, password)
VALUES ('test', '$2a$12$Ly8z2FVUHS0ZlvcL4909Seo1976VgSmyNrM6Z39/UaIR2Rnl2VTdC');

INSERT INTO albums (album_name, cover_photo)
VALUES ('The dogs', 'dog_photo4.png');

INSERT INTO photos (title, img_name, album_id)
VALUES ('dog 1', 'dog_photo2.jpg', 1),
('dog 2', 'dog_photo3.jpg', 1),
('dog 3', 'dog_photo4.jpg', 1),
('dog 4', 'dog_photo5.png', 1);

INSERT INTO photos (title, img_name, album_id)
VALUES ('cat 1', 'cat_1.jpg', 2),
('cat 2', 'cat_2.jpg', 2),
('cat 3', 'cat_3.jpg', 2);