<?php

$host="localhost";
$user="root";
$password="";
$db="login";

$link = mysqli_connect($host,$user,$password);
mysqli_select_db($link,$db);

if(isset($_POST['username'])){
    $uname = $_POST['username'];
    $password= $_POST['password'];
    $sql="select * from loginform where User='".$uname."'AND Pass='".$password."' limit 1";
    $result=mysqli_query($link,$sql);
    
    if(mysqli_num_rows($result)==1){
        echo "Login Successful";
        exit();
    }
    else{
        echo "Your login info is not correct";
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class='container-fluid'>
        <div class="d-flex justify-content-center align-items-center form-div">
            <div class="col-lg-3 col-md-6 col-sm-10">
            <h2 class='text-center text-success'>Login</h2>
            <form onClick='handleForm' method="POST" action="#">
                <input class='w-100 my-2 py-2' type="text" name='username' placeholder='User Name'>
                <input class='w-100 my-2 py-2' type="password" name='password' placeholder='Password'>
                <input class='w-100 my-2 py-2 btn btn-success' type="submit" name='submit' value='Login'>
            </form>
        </div>
    </div>
    </section>
    <script>
        const handleForm =(e)=>{
            e.preventdefalut();
        }
    </script>
</body>
</html>