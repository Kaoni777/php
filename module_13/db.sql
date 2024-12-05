CREATE DATABASE user_dashboard;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);

INSERT INTO users (username, email)
VALUES
('users1', 'user1@emaill.com'),
('users2', 'user1@email2.com'),
('users3', 'user1@email3.com'),
('users4', 'user1@email4.com'),
('users5', 'user1@email5.com');