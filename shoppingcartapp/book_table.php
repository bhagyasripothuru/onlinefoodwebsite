<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $guests = $_POST['guests'];

    $sql = "INSERT INTO table_booking (customer_name, email, phone, booking_date, booking_time, guests) 
            VALUES (:name, :email, :phone, :date, :time, :guests)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':time', $time);
    $stmt->bindParam(':guests', $guests);

    if ($stmt->execute()) {
        echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Booking Confirmation</title>
        <link rel='stylesheet' href='styles.css'> <!-- Optional link to CSS file for styling -->
    </head>
    <body>
        <div style='text-align: center; padding: 50px;'>
            <h2>Thank you, $name!</h2>
            <p>Your table booking for $date at $time for $guests guests has been successfully made.</p>
            <a href='index.php' style='color: #28a745; text-decoration: none; font-weight: bold;'>Go back to Homepage</a>
        </div>
    </body>
    </html>";
        
    } else {
        echo "Error booking table.";
    }
}
?>

