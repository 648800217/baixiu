
<?php
  // session_start();
  $id=$_SESSION['user_id'];
  echo $id;
  include_once "./fu.php";
  $sql="select * from users where id='$id'";
  $res=cx($sql);
  echo '<pre>';
  print_r($res);
  echo '</pre>'
// =============
// Array
// (
//     [0] => Array
//         (
//             [id] => 2
//             [slug] => zce
//             [email] => w@zce.me
//             [password] => 123
//             [nickname] => 飞飞
//             [avatar] => ../uploads/dog.jpg
//             [bio] => 
//             [status] => activated
//         )

// )
?>
<div class="aside">
<div class="profile">
  <img class="avatar" src="<?php echo $res[0]['avatar']?>">
  <h3 class="name"><?php echo $res[0]['nickname']?></h3>
</div>
<ul class="nav">
  <li class="active">
    <a href="index.html"><i class="fa fa-dashboard"></i>仪表盘</a>
  </li>
  <li>
    <a href="#menu-posts" class="collapsed" data-toggle="collapse">
      <i class="fa fa-thumb-tack"></i>文章<i class="fa fa-angle-right"></i>
    </a>
    <ul id="menu-posts" class="collapse">
      <li><a href="posts.php">所有文章</a></li>
      <li><a href="post-add.php">写文章</a></li>
      <li><a href="categories.php">分类目录</a></li>
    </ul>
  </li>
  <li>
    <a href="comments.php"><i class="fa fa-comments"></i>评论</a>
  </li>
  <li>
    <a href="users.php"><i class="fa fa-users"></i>用户</a>
  </li>
  <li>
    <a href="#menu-settings" class="collapsed" data-toggle="collapse">
      <i class="fa fa-cogs"></i>设置<i class="fa fa-angle-right"></i>
    </a>
    <ul id="menu-settings" class="collapse">
      <li><a href="nav-menus.php">导航菜单</a></li>
      <li><a href="slides.php">图片轮播</a></li>
      <li><a href="settings.php">网站设置</a></li>
    </ul>
  </li>
</ul>
</div>
