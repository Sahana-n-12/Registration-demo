<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    echo "
    <html>
    <head>
        <title>Submitted Details</title>
        <style>
            body {
                font-family: Arial;
                background: #f3f3f3;
                padding: 30px;
            }
            .box {
                background: white;
                padding: 25px;
                border-radius: 12px;
                width: 450px;
                margin: auto;
                box-shadow: 0 0 15px rgba(0,0,0,0.2);
            }
            h2 { text-align: center; color: #5a0fd1; }
            p { font-size: 18px; }
        </style>
    </head>
    <body>
    <div class='box'>
        <h2>Submitted Information</h2>
        <p><b>Name:</b> $name</p>
        <p><b>Email:</b> $email</p>
        <p><b>Phone:</b> $phone</p>
        <p><b>Date of Birth:</b> $dob</p>
        <p><b>Gender:</b> $gender</p>
        <p><b>Address:</b> $address</p>
    </div>
    </body>
    </html>";
}
?>
