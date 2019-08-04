<!-- 封装sql -->
<?php
header("Content-Type: text/html;charset=utf-8");
    define ('IP','127.0.0.1');
    define ('USER','root');
    define ('PASSWORLD','root');
    define ('DB','baixiu');
    define ('NUM',3306);  
function fc($sql){
    $link=mysqli_connect(IP,USER,PASSWORLD,DB,NUM);
   if($link){
       echo 'ok';
       $res=mysqli_query($link,$sql);
       if($res){
           echo "wancheng";
           mysqli_close($link);
       }
   }
        }
// $sql='delete from posts where id="1"';
// fc($sql);


function cx( $sql ) {
    $link = mysqli_connect( IP, USER, PASSWORLD, DB, NUM ); // 建立连接
    if ( !$link ) {
      echo "连接失败";
      return false;
    }

    // 执行 sql, 执行查询语句
    // 成功返回 结果集, 失败 返回 false
    $res = mysqli_query( $link, $sql );

    // 分析结果
    if ( !$res ) {
      // 处理失败
      echo mysqli_error( $link );
      mysqli_close( $link );
      return false;
    }

    // 成功, 得到了结果集 
    $arr = []; // 专门存储从结果集中取出的数据

    // mysqli_fetch_assoc 可以从结果集取数据, 每次取一条, 以关联数组的形式返回
    while( $row = mysqli_fetch_assoc( $res ) ) {
      $arr[] = $row;
    }

    mysqli_close( $link );
    return $arr;
  }
        // $sql="select * from users where email='648800217@qq.com'";
        // $res=cx($sql);
        // echo '<pre>';
        // print_r($res);
        // echo '</pre>';
?>