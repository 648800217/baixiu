<!DOCTYPE html>
<?php
include_once "./gonggong/lanjie.php";
include_once "./fu.php";
islogin();
$page='index1';
$sql="select count(*) as total FROM posts";
$wz=cx($sql);
$sql="select count(*) as total FROM categories";
$fl=cx($sql);
$sql="select count(*) as total FROM comments";
$pl=cx($sql);
$sql="select count(*) as total FROM posts where status='drafted'";
$cg=cx($sql);
$sql="select count(*) as total FROM comments where status='held'";
$sh=cx($sql);
// echo "<pre>";
// print_r($wz['0']);
// echo "</pre>";
?>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <title>Dashboard &laquo; Admin</title>
  <link rel="stylesheet" href="../assets/vendors/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/vendors/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="../assets/vendors/nprogress/nprogress.css">
  <link rel="stylesheet" href="../assets/css/admin.css">
  <script src="../assets/vendors/nprogress/nprogress.js"></script>
</head>
<body>
  <script>NProgress.start()</script>

  <div class="main">
  <?php include_once "./gonggong/header.php"?>
    <div class="container-fluid">
      <div class="jumbotron text-center">
        <h1>One Belt, One Road</h1>
        <p>Thoughts, stories and ideas.</p>
        <p><a class="btn btn-primary btn-lg" href="post-add.html" role="button">写文章</a></p>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">站点内容统计：</h3>
            </div>
            <ul class="list-group">
              <li class="list-group-item"><strong><?php echo $wz['0']['total']?></strong>篇文章（<strong><?php echo $cg['0']['total']?></strong>篇草稿）</li>
              <li class="list-group-item"><strong><?php echo $fl['0']['total']?></strong>个分类</li>
              <li class="list-group-item"><strong><?php echo $pl['0']['total']?></strong>条评论（<strong><?php echo $sh['0']['total']?></strong>条待审核）</li>
            </ul>
          </div>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
      </div>
    </div>
  </div>

<?php include_once "./gonggong/side.php"?>
  <script src="../assets/vendors/jquery/jquery.js"></script>
  <script src="../assets/vendors/bootstrap/js/bootstrap.js"></script>
  <script>NProgress.done()</script>
</body>
</html>
