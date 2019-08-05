
<?php
  // session_start();
  $id=$_SESSION['user_id'];
  echo $id;
  include_once "./fu.php";
  $sql="select * from users where id='$id'";
  $res=cx($sql);
  $ym=$page;
  $arr=['posts','post-add','categories'];
  $arr1=['nav-menus','slides','settings'];
  
  $isarr=in_array($ym,$arr);
  $isarr1=in_array($ym,$arr1);

  // echo $res;
  // echo $isarr ? 1:2;

  // echo '<pre>';
  // print_r($res);
  // echo '</pre>'
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
<p style="color:red">  <?php
      echo $page;
 
    
    
    ?></p>
</div>
<ul class="nav">
  <li class="<?php echo $ym==='index1' ? 'active':'' ?> ">
    <a href="index1.php"><i class="fa fa-dashboard"></i>仪表盘</a>
 
  </li>
  <li class="<?php echo $isarr ? 'active':'' ?> "  >
    <a href="#menu-posts" class="collapsed" data-toggle="collapse">
      <i class="fa fa-thumb-tack"></i>文章<i class="fa fa-angle-right"></i>
    </a>
    <ul id="menu-posts" class="collapse  <?php echo $isarr ? 'in':''?>">
      <li  class="<?php echo $ym==='posts' ? 'active':'' ?> "><a href="posts.php">所有文章</a></li>
      <li  class="<?php echo $ym==='post-add' ? 'active':'' ?> "><a href="post-add.php">写文章</a></li>
      <li  class="<?php echo $ym==='index1' ? 'categories':'' ?> "><a href="categories.php">分类目录</a></li>
    </ul>
  </li>
  <li class="<?php echo $ym==='comments' ? 'active':'' ?>" >
    <a href="comments.php"><i class="fa fa-comments"></i>评论</a>
  </li>
  <li class=" <?php echo $ym==='users' ? 'active':'' ?>" >
    <a href="users.php"><i class="fa fa-users"></i>用户</a>
  </li>
  <li class="<?php echo $isarr1 ? 'active':'' ?>" >
    <a href="#menu-settings" class="collapsed" data-toggle="collapse">
      <i class="fa fa-cogs"></i>设置<i class="fa fa-angle-right"></i>
    </a>
    <ul id="menu-settings" class="collapse <?php echo $isarr1 ? 'in':''?>">
      <li class="<?php echo $ym==='nav-menus' ? 'active':'' ?> "><a href="nav-menus.php">导航菜单</a></li>
      <li  class="<?php echo $ym==='slides' ? 'active':'' ?> "><a href="slides.php">图片轮播</a></li>
      <li  class="<?php echo $ym==='settings' ? 'active':'' ?>"><a href="settings.php">网站设置</a></li>
    </ul>
  </li>
</ul>
</div>
