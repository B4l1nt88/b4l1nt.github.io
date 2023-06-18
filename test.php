<!DOCTYPE html>
<html>
<head>
    <title>Test Page</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Test Page</h1>

    <?php
    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $name = $_POST["name"];
        $email = $_POST["email"];

        // Validate form data
        $name = trim($name);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        if (empty($name) || empty($email)) {
            echo '<script>alert("Please fill in all the fields.");</script>';
        } else {
            // Process the form data (you can add your own logic here)

            // Display success message
            echo '<script>alert("Form submitted successfully!");</script>';
        }
    }
    ?>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
