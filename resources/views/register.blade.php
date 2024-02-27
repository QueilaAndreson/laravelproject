<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?php echo config('app.url'); ?>assets/css/bootstrap.min.css" rel="stylesheet" >
    <script src="<?php echo config('app.url'); ?>assets/js/bootstrap.bundle.min.js" ></script>
    <script src="<?php echo config('app.url'); ?>assets/js/jquery-3.7.1.js"></script>

</head>
<body style="background-color:#d5d5d5;">
    <div  align="center" class="mt-5">
        <h1>Food card login</h1><br>
        <form action="<?php echo config('app.url'); ?>register_post" method="POST">
            @csrf
                <label>Enter Your name : </label><br>
                <input type="text" class="form-control" style="width:30%" name="name" required><br>
                <label>Enter Your Email: </label><br>
                <input type="email" class="form-control" style="width:30%" id="email" name="email" required><br>
                <label>Enter Your password : </label><br>
                <input type="password" class="form-control" style="width:30%" id="pasword" name="password" required><br>
                <input type="submit" value="submit" class="btn btn-primary" >
                
                <a href="<?php echo config('app.url'); ?>login_page" class="btn btn-info" id="Login">Login</a>
            </form>
    </div>

</body>
</html>