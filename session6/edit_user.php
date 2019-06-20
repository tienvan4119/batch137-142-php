<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="css/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style type="text/css">
    img {
      height: 100px;
    }
  </style>
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <?php include_once 'connect.php';?>
  <?php 
    // lay thong tin user cu ra
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($connect, $sql);
    $userEdit = $result->fetch_assoc();
    //
    if (isset($_POST['edit'])) {
      $username = $_POST['username'];
      $password = md5($_POST['password']);
      $city     = $_POST['city'];
      $gender   = isset($_POST['gender'])?$_POST['gender']:NULL;
      $avatar   = $_FILES['avatar'];  

      if ($username != '' && $password != '' && $city != ''
          && $gender != '' && $avatar['error'] == 0) {
       
        $avatarName = uniqid().'_'.$avatar['name'];
        move_uploaded_file($avatar['tmp_name'], 'uploads/avatar/'.$avatarName);

        $sql = "UPDATE users SET username = '$username', city = '$city', gender = '$gender', avatar = '$avatarName' WHERE id = $id";
        unlink("uploads/avatar/".$userEdit['avatar']);
         if (mysqli_query($connect, $sql) === TRUE) {
          header("Location: list_user.php");
        }
     }
    }
  ?>
  <div class="register-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form action="#" method="post" enctype="multipart/form-data">
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $userEdit['username']?>">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="radio" name="gender" value="male" 
        <?php echo ($userEdit['gender'] == 'male')?"checked":''?>
        > Male
        <input type="radio" name="gender" value="female"
        <?php echo ($userEdit['gender'] == 'female')?"checked":''?>
        > Female
      </div>
      <div class="form-group">
        <label>City</label>
        <select class="form-control" name="city">
          <option value="">Choose city</option>
          <option value="quangtri" 
          <?php echo ($userEdit['city'] == 'quangtri')?"selected":''?>
          >Quang Tri</option>
          <option value="hue"
          <?php echo ($userEdit['city'] == 'hue')?"selected":''?>
          >Hue</option>
          <option value="danang"
          <?php echo ($userEdit['city'] == 'danang')?"selected":''?>
          >Da Nang</option>
          <option value="quangnam"
          <?php echo ($userEdit['city'] == 'quangnam')?"selected":''?>    
          >Quang Nam</option>
        </select>
      </div> 
      <div class="form-group">
        <label for="exampleInputFile">Avatar</label>
        <input type="file" id="exampleInputFile" name="avatar">
      </div>
      <img src="uploads/avatar/<?php echo $userEdit['avatar']?>">
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="edit" class="btn btn-primary btn-block btn-flat">Edit user</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="js/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
