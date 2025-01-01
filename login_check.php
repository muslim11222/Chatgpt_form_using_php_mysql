<?php 

     session_start();

     $hostname = 'localhost';
     $username = 'root';
     $password = '';
     $bd_name = 'student_management';

     $conn = mysqli_connect($hostname, $username, $password, $bd_name);

     if(!$conn) {
          echo 'database connection failed'.mysqli_connect_error();
     }

     if(isset($_POST['submit'])) {
          $username = $_POST['username'];
          $password = $_POST['password'];

          $sql = "SELECT * FROM student_info WHERE username = '$username' AND password = '$password'";
          $result = mysqli_query($conn, $sql);
      
          if ($result && mysqli_num_rows($result) > 0) {
              $row = mysqli_fetch_assoc($result);
      
             
              $_SESSION['username'] = $row['password'];
              header("Location:admin.php");
              exit();
          } else {
              echo "Invalid username or password.";
          }



     }
     


?>