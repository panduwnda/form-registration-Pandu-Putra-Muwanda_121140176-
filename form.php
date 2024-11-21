<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form id="registrationForm" action="process.php" method="POST" enctype="multipart/form-data">
        <h2>Registration Form</h2>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required minlength="3">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required min="18">

        <label for="file">Upload File:</label>
        <input type="file" id="file" name="file" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required minlength="10"></textarea>

        <button type="submit">Submit</button>
    </form>
</body>

</html>