<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Form</title>
</head>
<body>
    <h2>User Information Form</h2>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    // Step 2: Process the form data
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect and sanitize input data
        $name = htmlspecialchars(trim($_POST["name"]));
        $email = htmlspecialchars(trim($_POST["email"]));

        // Display the submitted data
        echo "<h3>Submitted Information:</h3>";
        echo "Name: $name <br>";
        echo "Email: $email <br>";
    }
    ?>
</body>
</html>
