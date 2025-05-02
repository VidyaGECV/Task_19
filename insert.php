<?php
include 'db.php';

$book_id = $_POST['book_id'];
$title = $_POST['title'];
$author = $_POST['author'];
$no_of_pages = $_POST['no_of_pages'];

$sql = "INSERT INTO book_records (book_id, title, author, no_of_pages)
        VALUES ('$book_id', '$title', '$author', '$no_of_pages')";

if ($conn->query($sql) === TRUE) {
    echo "New record added successfully! <a href='index.php'>Go back</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>