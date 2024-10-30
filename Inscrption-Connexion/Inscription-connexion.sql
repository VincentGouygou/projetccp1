CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    pseudo VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    birthdate DATE NOT NULL,
    avatar VARCHAR(255) DEFAULT NULL,
    platform ENUM('PC', 'PlayStation', 'Xbox', 'Switch') NOT NULL,
    games JSON NOT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
