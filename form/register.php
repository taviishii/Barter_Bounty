 
<?php
session_start();

include("db.php");

if($_SERVER['REQUEST_METHOD']== "POST")
{
$user_name = $_POST['Username'];
$email = $_POST['Email'];
$Pass = $_POST['Password'];



if(!empty($email) && !empty($Pass) && !empty($user_name))
{
$query = "insert into form (UN, Mail, Pass) values ('$user_name', '$email', '$Pass')";

mysqli_query($con,$query);

echo "<script type='text/javascript'> alert('Succesfully Registered') </script>";
}
else{
echo "<script type='text/javascript'> alert('Enter valid information') </script>";
}
}
?>
<!-- -------------------------------------------------------------------------------- -->

<!-- HTML  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Registration form</title>
    <link rel="stylesheet" href="ekaurstyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
</head>

<body>
       <!-- <div class="navbar">
                <div class="logo"> 
                    <img src="logo.png" width="50px">
                </div>
                <nav>
                    <ul>
                        <li><a href="">HOME</a></li>
                        <li><a href="../Catalogue/a.html">PRODUCTS</a></li>
                        <li><a>ABOUT US</a></li>
                        <li><a>CONTACT</a></li>
                        <li><a class="active">ACCOUNT</a></li>
                    </ul>
                </nav>
                <img src="cart.png" width="30px" height="30px">
            </div> -->

            <div class="navigation">
<nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container-fluid">
            <a class="name" href="#">BarterBounty</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="color: #FFFF8D;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="..\Reviews page\reviews.html" style="color: #FFFF8D;">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="..\Upload Page\upload.html" style="color: #FFFF8D;">Upload</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="color: #FFFF8D;">
                            SignIn/SignUp
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="http://localhost/form/login.php" style="color: black;">SignIn</a></li>
                            <li><a class="dropdown-item" href="http://localhost/form/register.php" style="color: black;">SignUp</a></li>
                        </ul>
                    </li>


                </ul>
            </div>
        </div>
    </nav>

    </div>


    <!-- First Creating a Registration form -->
    <div class="container">
        <div class="form-box">
            <form action="" name="formfill" onsubmit="return validation()" method="POST">
                <h2>Register</h2>
                <p id="result"></p>
                <div class="inputbox">
                    <i class='bx bxs-user'></i>
                    <input type="text" name="Username" placeholder="Username">
                </div>
                <div class="inputbox">
                    <i class='bx bxs-envelope'></i>
                    <input type="email" name="Email" placeholder="Email">
                </div>
                <div class="inputbox">
                    <i class='bx bxs-lock'></i>
                    <input type="password" name="Password" placeholder="Password">
                </div>
                <div class="inputbox">
                    <i class='bx bxs-lock-alt'></i>
                    <input type="password" name="Cpassword" placeholder="Confirm Password">
                </div>
                <div class="button">
                    <input type="submit" class="btn" onclick="validation()" value="Register">
                </div>
                <div class="group">
                    <span><a>Already a user?</a></span>
                    <span><a href="login.php">Login</a></span>
                </div>
            </form>
        </div>
    </div>


    <footer class="bg-dark text-light py-3" style="position: absolute; top: 100vh; width: 100%; border: 2px solid;"> 
        <p class="text-center">
            Copyright &copy; BarterBounty.com
        </p>
    </footer>

    <!-- ------------------------------------------------------------------- -->
    <!-- Creating a pop up value -->
    <!-- <div class="popup" id="popup">
        <ion-icon name="checkmark-circle-outline"></ion-icon>
        <h2>Thank you!</h2>
        <p>You have registered Successfully. Thanks!</p>
        <a href="login.html"><button onclick="CloseSlide()">OK</button></a>

    </div> -->
    <!-- ---------------------------------------------------------------------- -->

    <script src="script.js"></>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>