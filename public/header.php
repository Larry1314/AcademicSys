<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
//����һ���Ự
session_start();
?>
<html>
<head>
<title>�����źŴ���VLSI���</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="../styles/layout.css" type="text/css" />
<?php if($curfile!="teachingteam.php") {
	?>
<script type="text/javascript" src="../scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="../scripts/jquery.slidepanel.setup.js"></script>
<script type="text/javascript" src="../scripts/jquery.cycle.min.js"></script>
<script type="text/javascript" src="../scripts/jquery.cycle.setup.js"></script>
<?
	}
?>
</head>
<body>
<div class="wrapper col0">
  <div id="topbar">
    <div id="slidepanel">
       <div class="topbox">
        <h2>ע����֪</h2>
        <p>δע����û�������ע�ᣬ�û�����ʹ��������ע�ᡣ</p>
        <p>ע��ʱ����ʹ��Ӣ�ĺ����ֻ����Ϊ���룬���볤�Ȳ�����6λ��</p>
        <p>ע�᱾��վ����Ĭ��ͬ�Ȿվע��Э�顣</p>
        <p class="readmore"><a href="#">�û�Э�� &raquo;</a></p>
      </div>
      <div class="topbox">
        <h2>��ʦ��½���</h2>
        <form action="logincheck.php" method="post">
          <fieldset>
            <legend>Teachers Login Form</legend>
            <label for="teachername">�û���:
              <input type="text" name="username" id="teachername" value="" />
            </label>
            <label for="teacherpass">����:
              <input type="password" name="password" id="teacherpass" value="" />
            </label>
            <label for="teacherremember">
              <input class="checkbox" type="checkbox" name="teacherremember" id="teacherremember" checked="checked" />
              ��ס����</label>
            <p>
              <input type="submit" name="submit" id="teacherlogin" value="��½" />
              &nbsp;
              <a href="register.php">ע��</a>
            </p>
          </fieldset>
        </form>
      </div>
      <div class="topbox last">
        <h2>ѧ����½���</h2>
        <form action="logincheck.php#" method="post">
          <fieldset>
            <legend>Pupils Login Form</legend>
            <label for="pupilname">�û���:
              <input type="text" name="username" id="pupilname" value="" />
            </label>
            <label for="pupilpass">���룺
              <input type="password" name="password" id="pupilpass" value="" />
            </label>
            <label for="pupilremember">
              <input class="checkbox" type="checkbox" name="pupilremember" id="pupilremember" checked="checked" />
              ��ס����</label>
            <p>
              <input type="submit" name="submit" id="pupillogin" value="��½" />
              &nbsp;
              <a href="register.php">ע��</a>
            </p>
          </fieldset>
        </form>
      </div>
      <br class="clear" />
    </div>
    <div id="loginpanel">
      <?php
        if(!isset($_SESSION['user_id'])){
           // echo '<p class="error">'.$error_msg.'</p>';
        ?>	
		<ul>
        <li class="left">�����½ &raquo;</li>
        <li class="right" id="toggle"><a id="slideit" href="#slidepanel">����Ա</a><a id="closeit" style="display: none;" href="#slidepanel">�ر����</a></li>
		</ul>
	 <?php 
		}
		else if( isset($_SESSION['username']))
		{
		?>
		<ul>
		<li class="left"><?php	echo $_SESSION['username']; ?></li>
        <li class="right" id="toggle"><a id="slideit" href="logout.php?ge=0">ע��</a></li>
		</ul>
		<?php	
			}
		?> 
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<?php
$curfile = basename($_SERVER['PHP_SELF']);
?>
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1><a href="#">�����źŴ���VLSI���</a></h1>
      <!--<p>��Ʒ�γ�</p>-->
    </div>
    <div id="topnav">
      <ul>
        <li ><a href="../index.php">�γ̽���</a></li>
        <li <?php if($curfile=="leadingteacher.php") echo "class='active'";?>> <a href="leadingteacher.php">������ʦ</a></li>
        <li <?php if($curfile=="teachingteam.php") echo "class='active'";?>><a href="teachingteam.php">��ʦ�Ŷ�</a></li>
        <li <?php if($curfile=="teachingcontent.php") echo "class='active'";?>><a href="teachingcontent.php">��ѧ����</a></li>
        <li <?php if($curfile=="coursevideo.php") echo "class='active'";?>><a href="coursevideo.php">�γ�¼��</a></li>
        <li <?php if($curfile=="reference.php") echo "class='active'";?>><a href="reference.php">�ο�����</a></li>
        <li class="last"><a href="answeronline.php">���ߴ���</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>