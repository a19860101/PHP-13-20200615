<?php session_start(); ?>
<?php
  include("pdo.php");
  include("function/cate.php");
  $cates = showAllCate();

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">QQ BLOG</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      
      <?php if($_SESSION){ ?>
      <li class="nav-item active">
        <a class="nav-link" href="create_post.php">新增文章</a>
      </li>
      <?php } ?>
      <?php if($_SESSION && $_SESSION["LV"] == 0){?>
      <li class="nav-item">
        <a class="nav-link" href="admin/member-list.php">會員管理</a>
      </li>
      <?php }?>
      <?php foreach($cates as $cate){ ?>
      <li class="nav-item">
        <a href="category.php?c_id=<?php echo $cate["id"];?>" class="nav-link"><?php echo $cate["title"];?></a>
      </li>
      <?php }?>
    </ul>
    <ul class="navbar-nav ml-auto">
    <?php if(!$_SESSION){ ?>
      <li class="nav-item">
        <a href="#" class="nav-link">訪客您好</a>
      </li>
      <li class="nav-item">
        <a href="login.php" class="nav-link">登入</a>
      </li>
      <li class="nav-item">
        <a href="register.php" class="nav-link">申請會員</a>
      </li>
      <?php }else{ ?>
      <li class="nav-item">
        <a href="#"class="nav-link"><?php echo $_SESSION["USER"];?>您好</a>
      </li>
      <li class="nav-item">
        <a href="logout.php" class="nav-link">登出</a>
      </li>
      <?php } ?>
    </ul>
  </div>
</nav>