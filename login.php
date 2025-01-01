<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login Page</title>

     <!-- css link here  -->
      <link rel="stylesheet" href="style.css">

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="body_main">
     
     <center>
          <div class="main_form_div">

               <center class="login_text">
                    <h1>Login</h1>
               </center>

               <form action="login_check.php" method="POST">
                    

                    <div class="input_box">
                         <label>Username</label>
                         <input type="text" name="username">
                    </div>

                    <div class="input_box">
                         <label>Password</label>
                         <input type="password" name="password">
                    </div>


                    <div>                       
                         <input class="btn btn-primary" type="submit" name="submit" value="Login">
                    </div>
               </form>
          </div>
     </center>





     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>