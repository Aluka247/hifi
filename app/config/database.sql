
CREATE TABLE  users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    age INT NOT NULL
);

-- CREATE TABLE IF NOT EXISTS videos (
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     price INT(255) NOT NULL,
--     title VARCHAR(25) NOT NULL,
--     description VARCHAR(225) NOT NULL,
--     date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
-- );

-- CREATE TABLE IF NOT EXISTS levels (
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     name VARCHAR(50) NOT NULL,
--     nick_name VARCHAR(20) NULL

-- );



-- Add more table creation queries as needed
