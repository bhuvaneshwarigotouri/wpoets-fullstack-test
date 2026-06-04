CREATE DATABASE wpoets_test;

USE wpoets_test;

CREATE TABLE slides (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tab_title VARCHAR(255) NOT NULL,
    slide_title VARCHAR(255) NOT NULL,
    slide_description TEXT,
    image VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
