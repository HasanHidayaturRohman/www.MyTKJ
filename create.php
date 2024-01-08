<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Entry</title>
    <link rel="stylesheet" href="styles.css"> <!-- Include your own stylesheet -->
</head>
<body>

<!-- Your existing HTML content -->

<h2>Create New Entry</h2>
<form action="process_create.php" method="POST">
    <label for="nama">Name:</label>
    <input type="text" id="nama" name="nama" required>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" required>
    <button type="submit" name="submit">Create</button>
</form>

</body>
</html>
