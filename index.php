<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Book Records</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Book Records</h1>
    <a href="add.php" class="button">Add New Book</a>
    <table>
        <tr>
            <th>Book ID</th><th>Title</th><th>Author</th><th>No. of Pages</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM book_records");
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['book_id']}</td>
                <td>{$row['title']}</td>
                <td>{$row['author']}</td>
                <td>{$row['no_of_pages']}</td>
            </tr>";
        }
        ?>
    </table>
</div>
</body>
</html>