<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zip = $_POST["zip_code"];
    $card_name = $_POST["card_name"];
    $card_number = $_POST["card_number"];
    $expiry_date = $_POST["expiry_date"];
    $cvv = $_POST["cvv"];

    try {
        $stmt = $conn->prepare("
            INSERT INTO users 
            (fname, lname, email, password, address, city, state, zip_code, card_number, card_name, expiry_date, cvv)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
        ");

        $stmt->bind_param(
            "ssssssssssss",
            $fname, $lname, $email, $password,
            $address, $city, $state, $zip,
            $card_number, $card_name, $expiry_date, $cvv
        );
        $stmt->execute();

       
        echo '
        <div class="success-wrapper" style="display: flex; justify-content: center; align-items: center; height: 100vh; background: linear-gradient(180deg, #6fcf97, #2f8f7a); color: #fff;">
          <div class="success-box">
            <h1 style="justify-self: center;">Form Submitted Successfully</h1>
            <p style="color: #fff; font-size: 18px;">Thank you, <strong>' . htmlspecialchars($fname) . ' ' . htmlspecialchars($lname) . '</strong>, for submitting the form.</p>
          </div>
        </div>
        ';

    } catch (mysqli_sql_exception $e) {
        if ($e->getCode() == 1062) { 
           echo '
                <div class="success-wrapper" style="display: flex; justify-content: center; align-items: center; height: 100vh; background: linear-gradient(180deg, #6fcf97, #2f8f7a); color: #fff;">
                  <div class="error-box">
                      <h1 style="justify-self: center;">Registration <span style="color:red;">Error</span></h1>
                      <p style="color: #fff; font-size: 18px; text-align: center;">The email <strong style="color: #0f5e4dff;">' . htmlspecialchars($email) . '</strong> is already registered. <br>Please use a different email.</p>
                      <div style="text-align: center;"><a href="index.html" style="color: #083128ff; text-decoration: none; font-size: 18px;"> Go back to form</a> </div>   
                  </div>
                </div>
            ';

        } else {
            echo "Database error: " . $e->getMessage();
        }
    }

    $stmt->close();
    $conn->close();
}
?>
