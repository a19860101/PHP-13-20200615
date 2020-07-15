<?php session_start(); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">QQ BLOG 管理介面</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <?php if($_SESSION && $_SESSION["LV"] == 0){?>
      <li class="nav-item">
        <a class="nav-link" href="member-list.php">會員管理</a>
      </li>
      <?php }?>
    </ul>
    <ul class="navbar-nav ml-auto">
    <?php if($_SESSION){ ?>
      <li class="nav-item">
        <a href="#"class="nav-link"><?php echo $_SESSION["USER"];?>您好</a>
      </li>
      <li class="nav-item">
        <a href="../logout.php" class="nav-link">登出</a>
      </li>
      <?php } ?>
    </ul>
  </div>
</nav>