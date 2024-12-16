<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $address = htmlspecialchars($_POST["address"]);
    
    // Display the captured data
    echo "
    <div style='width:50%; margin:50px auto; font-family: Arial, sans-serif; background:#f9f9f9; padding:20px; border-radius:8px;'>
        <h2 style='text-align: center;'>Registration Successful!</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Address:</strong> $address</p>
    </div>";
} else {
    echo "<p style='color:red; text-align:center;'>Invalid request.</p>";
}
?>
