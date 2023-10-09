<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        *{
            padding : 0;
            margin : 0;
            box-sizing : border-box;
        }
        body{
            background-color : #f4f4f4;
        }
        .container{
            width : 100%;
            padding-right : 15px;
            padding-left : 15px;
            margin-right : auto;
            margin-left : auto;
        }
        .wrap{
            display : flex;
            justify-content : center;
        }

        .box{
            width : 350px; 
            margin-top : 50px;
            position : relative;
            display : flex;
            flex-direction : column;
            min-width : 0;
            word-wrap : break-word;
            background-color: #fff;
            background-clip : border-box;
            border : 1px solid rgba(0, 0, 0, .125);
            border-radius : 0.25rem;
        }
        .box-body{
            flex : 1 1 auto;
            min-height: 1px;
            padding : 1.25rem;
        }
        h2{
            font-size : 2rem;
            text-align: center;
        }
        label{
            display : inline-block;
            margin-bottom : 0.5rem;
        }
        .form-c{
            display : block;
            width : 100%;
            padding : 5px 5px ;
            font-size : 1rem;
            font-weight : 400;
            line-height : 1.5;
            color : #495057;
            background-color : #fff;
            background-clip : padding-box;
            border : 1px solid #ced4da;
            border-radius : 0.25rem;
        }
        .btn{
            display : inline-block;
            font-weight : 400;
            text-align : center;
            vertical-align : middle;
            user-select : none;
            border : 1px solid transparent;
            padding : 0.375rem 0.75rem;
            font-size : 1rem;
            border-radius : 0.25rem;
            line-heigh t: 1.5;
        }
        .btn-warna{
            width : 100%;
            color : #fff;
            background-color : #007bff;
            border-color : #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="wrap">
            <div class="box">
                <div class="box-body">
                    <form action = "tugas-2.php" method = "post">
                        <h2>Login</h2><br>
                        <label for = "email">Email</label>
                        <input type = "email" name = "email" class = "form-c" required> <br>
                        <label for = "password">Password</label>
                        <input type = "password" class = "form-c" name = "password" required> <br>
                        <input type = "submit" name = "login" value = "Log In" class = "btn btn-warna">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    if(isset($_POST['login'])){
        if($_POST['email'] == "admin@gmail.com" && $_POST['password'] == "admin"){
            header('Location: selamat.html');
        }else{
            echo "<script>alert('email/password salah');</script>";
        }
    }
?>