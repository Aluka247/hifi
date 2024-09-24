
CREATE TABLE  users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    age INT NOT NULL
);

CREATE TABLE videos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    description TEXT NOT NULL,
    file_path VARCHAR(255) NOT NULL,  -- to store the path to the uploaded video file
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


-- CREATE TABLE IF NOT EXISTS levels (
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     name VARCHAR(50) NOT NULL,
--     nick_name VARCHAR(20) NULL

-- );



-- Add more table creation queries as needed
