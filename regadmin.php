<!DOCTYPE html>
<html>
<head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
</head>
<style>
    body{
      background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),URL(image.jfif);
      background-size: cover;
      background-position: center;
      font-size: 20px;
    }
    .login-box{
      max-width: 700px;
      float: none;
      margin: 100px auto;
    }
    .login-left{
      background: rgba(211,211,211,0.5);
      padding: 20px;
    }
</style>
<body>
  <div class="container">
    <div class="login-box">
    <div class="row">
      <div class="col-md-6 login-left">
        <h2>Register here</h2>
        <form action="registration.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label>Firstname</label>
            <input type="text" name="fname"  class="form-control" required>
          </div>
          <div class="form-group">
            <label>Lastname</label>
            <input type="text" name="lname"  class="form-control" required>
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="username"  class="form-control" required>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="pass"  class="form-control" required>
          </div>
          <div class="form-group">
            <label>Gender</label><br>
            <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
          </div>
          <div class="form-group">
            <label>Contact</label>
            <input type="text" name="num" placeholder="03XX" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Profile Image</label>
            <input type="file" name="upload"  value="" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-info">Registered</button>
        </form>

      </div>
    </div>
  </div>
</div>
</body>
</html>
