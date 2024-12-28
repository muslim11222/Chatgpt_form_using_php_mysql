<?php 
     
     $hostname = 'localhost';
     $username = 'root';
     $password = '';
     $db_name = 'chatgpt_from';

     $conn = mysqli_connect($hostname, $username, $password, $db_name);

     if(!$conn) {
          echo 'connection failed' .mysqli_connect_error();
     }
     
     if(isset($_POST['submit'])) {
          $name = $_POST['name'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          $message = $_POST['message'];


          $sql = "INSERT INTO chatgpt_user(name, email, password, message) VALUES('$name', '$email', '$password', '$message')";
          $result = mysqli_query($conn, $sql);

          if($result == true) {
               echo 'data inserted successfully';
          } else {
               echo 'data not inserted successfully';
          }
     }

?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Input Form</title>
    <link rel="stylesheet" href="/Student_Management_System_using_php/style.css">
</head>
<body>
     <div class="form-container">
        <h2>Input Form</h2>
          <form action="#" method="post">
               <label for="name">Name:</label>
               <input type="text" id="name" name="name" placeholder="Enter your name" required>

               <label for="email">Email:</label>
               <input type="email" id="email" name="email" placeholder="Enter your email" required>

               <label for="password">Password:</label>
               <input type="password" id="password" name="password" placeholder="Enter your password" required>

               <label for="message">Message:</label>
               <textarea id="message" name="message" rows="4" placeholder="Write your message"></textarea>

               <button type="submit" name="submit">Submit</button>
          </form>
     </div>
</body>
</html>
