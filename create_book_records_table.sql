
CREATE TABLE IF NOT EXISTS book_records (
    book_id INT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(255) NOT NULL,
    no_of_pages INT
);
