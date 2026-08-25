```php
<?php
session_start();

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get data using $_POST
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validation
    if (empty($name) || empty($email) || empty($password)) {
        $message = "Please fill all fields.";
    }
    elseif (strpos($email, "@") === false) {
        $message = "Email must contain @.";
    }
    elseif (strlen($password) <= 6) {
        $message = "Password must be more than 6 characters.";
    }
    else {

        // Store data in session
        $_SESSION["name"] = $name;
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $password;

        $message = "Registration Successful!";
    }
}
?>

