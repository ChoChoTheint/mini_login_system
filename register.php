<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
    rel="stylesheet"
    />
</head>
<body style="background-color:black">
    <div class="container mt-4">
        <div class="row">
            <div class="col-3">
                <div class="text-center">
                    <a href="login.php">
                        <button class="btn bg-primary text-white mb-3" style="width:200px">Login</button>
                    </a>
                </div>
                <div class="text-center">
                    <a href="logout.php">
                        <button class="btn bg-success text-white mb-3" style="width:200px">Logout</button>
                    </a>
                </div>

                <div class="text-center">
                    <a href="register.php">
                        <button class="btn bg-danger text-white mb-3" style="width:200px">Register</button>
                    </a>
                </div>
            </div>
            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Comfirm Password</label>
                            <input type="password" name="comfirmPassword" class="form-control">
                            </div>
                            <button type="submit" class="btn bg-dark text-white float-end" name="register">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    
    session_start();
    function checkStrongPassword($password){
        $upperStatus = false;
        $lowerStatus = false;
        $numberStatus = false;
        $specialStatus = false;
        if(preg_match('/[A-Z]/', $password)){
            $upperStatus = true;
        }
        if(preg_match('/[a-z]/', $password)){
            $lowerStatus = true;
        }
        if(preg_match('/[0-9]/', $password)){
            $numberStatus = true;
        }
        if(preg_match('/[!@#$%]/', $password)){
            $specialStatus = true;
        }
        if($upperStatus && $lowerStatus && $numberStatus && $specialStatus){
            return true;
        }else{
            return false;
        }
    }
    
    if(isset($_POST['register'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $comfirmPassword =$_POST['comfirmPassword'];

        if($name != "" && $email != "" && $password != "" && $comfirmPassword != ""){
            if(strlen($password) >= 6 && strlen($comfirmPassword) >= 6){
                if($password == $comfirmPassword){
                   $status = checkStrongPassword($password);
                   if($status){
                        $_SESSION['email'] = $email;
                        $_SESSION['password'] = password_hash($password,PASSWORD_BCRYPT);
                        echo "register Success! ";
                   }else{
                    echo "Your password not strong.(eg . contain [A-Z][a-z][0-9][!@#$])";
                   }
                }else{
                    echo "Password not same. Type Again";
                }
           }else{
            echo "Password must be grater than 6";
           }
        }else{
            echo "Need to fill";
        }
    }

    ?>
</body>
</html>