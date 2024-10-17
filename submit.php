
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $age = (int)$_POST['age'];
    $blood_pressure = htmlspecialchars($_POST['blood_pressure']);

    // Display the data (you can modify this to save the data to a database)
    echo "<h1>Registration Successful!</h1>";
    echo "<p>First Name: " . $first_name . "</p>";
    echo "<p>Last Name: " . $last_name . "</p>";
    echo "<p>Age: " . $age . "</p>";
    echo "<p>Blood Pressure: " . $blood_pressure . "</p>";
} else {
    echo "<p>Error: Form was not submitted properly.</p>";
}
?>
