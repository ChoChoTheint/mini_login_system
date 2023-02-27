<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php
    $errorName = $errorEmail = $errorPhone = $errorAddress = "";
    $name = $email = $phone = $address = "";
    if(isset($_POST['savebtn'])){
        if($_POST['name'] ==null || $_POST['name'] == "" || empty($_POST['name']) ){
            $errorName = "Please fill name field!";
        }else{
            $name = $_POST['name'];  
        }

        if($_POST['email'] ==null || $_POST['email'] == "" || empty($_POST['email']) ){
            $errorEmail = "Please fill email field!";
        }else{
            $email = $_POST['email'];  
        }

        if($_POST['address'] ==null || $_POST['address'] == "" || empty($_POST['address']) ){
            $errorAddress = "Please fill address field!";
        }else{
            $address = $_POST['address'];  
        }

        if($_POST['phone'] ==null || $_POST['phone'] == "" || empty($_POST['phone']) ){
            $errorPhone = "Please fill phone field!";
        }else{
            $phone = $_POST['phone'];  
        }

        if($name != "" && $email != "" && $address != "" && $phone != "") {
            echo $name . "<br/>";
            echo $email . "<br/>";
            echo $address . "<br/>";
            echo $phone . "<br/>";
        }
    }

    ?>



    <div class="container mt-5">
        <div class="row">
            <div class="col-6 offset-3 shadow">
                <form action="" method="POST">
                    <div class="my-3 px-5">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Name">
                        <span class="text-danger"><?php echo $errorName; ?></span>
                    </div>
                    <div class="my-3 px-5">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Eg: example@gmail.com">
                        <span class="text-danger"><?php echo $errorEmail; ?></span>
                    </div>

                    <div class="my-3 px-5">
                        <label for="">Phone</label>
                        <input type="number" name="phone" class="form-control" placeholder="Eg: 09.........">
                        <span class="text-danger"><?php echo $errorPhone; ?></span>
                    </div>
                    <div class="my-3 px-5">
                        <label for="">Address</label>
                        <textarea name="address" class="form-control" id="" cols="30" rows="10" placeholder="Enter address"> </textarea>
                        <span class="text-danger"><?php echo $errorAddress; ?></span>
                    </div>
                    <div class="my-3 px-5 float-end">
                        <button name="savebtn" type="submit" class="btn text-white bg-dark">Save</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>