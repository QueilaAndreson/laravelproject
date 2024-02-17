<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="<?php echo config('app.url'); ?>assets/css/bootstrap.min.css" rel="stylesheet">
  <script src="<?php echo config('app.url'); ?>assets/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo config('app.url'); ?>assets/js/jquery-3.7.1.js"></script>

</head>

<body class="bg-muted" style="background-color:#d5d5d5;">
  <div class="container">
    <div align="center" class="mt-5">
      <h1>Food card login</h1><br>
      <label for="name">Enter Your email:</label>
      <input type="text" class="form-control" placeholder="enter your email" id="username" style="width:30%"><br>
      <label for="password">Enter your password:</label>
      <input type="password" class="form-control" id="password" placeholder="enter password" style="width:30%"><br>
      <input type="button" value="Submit" class="btn btn-primary" id="submit">
      <input type="button" value="Reset" class="btn btn-danger" id="reset">

    </div>
  </div>


</body>
<script>
  $('#submit').on('click', function() {
    var email = $('#username').val();
    var password = $('#password').val();
    if (email == "") {
      alert('Please enter your email');

    } else if (password == "") {
      alert('Please enter your password');

    } else {


      $.ajax({
        method: "POST",
        url: "<?= config('app.url') ?>login_post",
        headers: {
          'X-CSRF-TOKEN': "<?= csrf_token() ?>",
        },
        data: {
          user_email: email,
          user_password: password

        },
        success: function(response) {

          var data=JSON.parse(response);
          console.log(data);
          if(data.status=="success"){
            // alert(data.user_name+" login success");

            window.location.href="<?= config('app.url') ?>foodcard_home";

          }else{
            alert("invalid creadiejhgkug");
          }
          // console.log(response);
          // alert("Save Complete");
        },
        error: function(response) {
          alert("error occured");
        }
      });
    }

  });
  $('#reset').on('click', function() {
    $('#username,#password').val('');
    // $('#password').val('');
  });
</script>

</html>