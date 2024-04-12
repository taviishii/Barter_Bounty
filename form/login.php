<?php
session_start();

include("db.php");

if($_SERVER['REQUEST_METHOD']== "POST")
{
$email = $_POST['Email'];
$Pass = $_POST['Password'];



if(!empty($email) && !empty($Pass))
{
$query = "select * from form where Mail='$email' limit 1";
$result = mysqli_query($con, $query);

if($result)
{
    if($result && mysqli_num_rows($result)>0)
    {
        $user_data=mysqli_fetch_assoc($result);

        if($user_data['Pass']== $Pass)
        {
            header("location:..\Barter_Bounty\Upload Page\upload.html");
            die;
        }
    }
}
echo "<script type='text/javascript'> alert('Wrong Username or Password') </script>";
}
else{
    echo "<script type='text/javascript'> alert('Wrong Username or Password') </script>"; 
}
}
?>


<!-- ------------------------------------------------------------------ -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="newstyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
</head>
<body style="background-color: #ffffff;">
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
            

    <div class="container">
        <div class="form-box">
            <form action="" name="formfill" onsubmit="return validation()" method="POST">
                <h2>Login In</h2>
                <p id="result"></p>
                <div class="inputbox">
                    <i class='bx bxs-envelope'></i>
                    <input type="email" name="Email" placeholder="Email">
                </div>
                <div class="inputbox">
                    <i class='bx bxs-lock'></i>
                    <input type="password" name="Password" placeholder="Password">
                </div>
                <div class="button">
                    <input type="submit" class="btn" onclick="validation()" value="Login">
                </div>
                <div class="group">
                    <span><a href="#">Forgot Password</a></span>
                    <span><a href="register.php">Not a user?</a></span>
                </div>
            </form>
        </div>
    </div>

    <footer class="bg-dark text-light py-3" style="position: absolute; top: 100vh; width: 100%; border: 2px solid;"> 
        <p class="text-center">
            Copyright &copy; BarterBounty.com
        </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>