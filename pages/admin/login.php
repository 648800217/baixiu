<!DOCTYPE html>
<?php
$page='login';
error_reporting(0); 
 include_once "./fu.php";
  if(!empty($_POST)){
  //   echo "<pre>";
  //   print_r($_POST);
  //  echo "</pre>";
   $user=$_POST[ 'email'];
   $pass=$_POST['pass']; 
  
  }
   if(empty($user)||empty($pass)){
    //  echo "ok";
    $err="用户名密码不能为空";
   }
   else{
      $sql="select * from users where email='$user'";
        $res=cx($sql);
        $data=$res[0];
        // echo '<pre>';
        // print_r( $data);
        // print_r( cx($sql));
        // echo "</pre>"; 
        if($data['password']===$pass){
          header('location:index1.php');
          session_start();
          $_SESSION['user_id']=$data["id"];
          
        }
        else{
         $err= "用户名或密码错误";
        };
   };


?>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <title>Sign in &laquo; Admin</title>
  <link rel="stylesheet" href="../assets/vendors/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/css/admin.css">
</head>
<body>
  <div class="login">
    <form class="login-wrap" method="post" action="">
      <img class="avatar" src="../assets/img/default.png">
      <!-- 有错误信息时展示 -->
      <?php if(isset($err)) {?>
      <div class="alert alert-danger">
        <strong>错误！</strong> <?php echo $err ;?>
      </div>
      <?php } ?>
      <div class="form-group">
        <label for="email" class="sr-only">邮箱</label>
        <input id="email" type="text" class="form-control"  name ="email" placeholder="邮箱" 
        value="<?php echo isset( $user) ? $user : ''?>" autofocus >
      </div>
      <div class="form-group">
        <label for="password" class="sr-only" >密码</label>
        <input id="password" type="password" class="form-control" placeholder="密码" name ="pass">
      </div>     
      <input  class="btn btn-primary btn-block" type="submit" value="登录">
    </form>
  </div>
</body>
</html>
