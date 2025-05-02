<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Add New Book</h1>
    <form action="insert.php" method="post">
        <input type="text" name="book_id" placeholder="Book ID" required>
        <input type="text" name="title" placeholder="Title" required>
        <input type="text" name="author" placeholder="Author" required>
        <input type="text" name="no_of_pages" placeholder="No. of Pages" required>
        <input type="submit" value="Add Book">
    </form>
</div>
</body>
</html>