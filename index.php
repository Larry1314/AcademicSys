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
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.slidepanel.setup.js"></script>
<script type="text/javascript" src="scripts/jquery.cycle.min.js"></script>
<script type="text/javascript" src="scripts/jquery.cycle.setup.js"></script>
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
        <form action="public/logincheck.php" method="post">
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
              <a href="public/regcheck.php">ע��</a>
            </p>
          </fieldset>
        </form>
      </div>
      <div class="topbox last">
        <h2>ѧ����½���</h2>
        <form action="public/logincheck.php#" method="post">
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
              <a href="public/register.php">ע��</a>
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
        <li class="right" id="toggle"><a id="slideit" href="public/logout.php">ע��</a></li>
		</ul>
		<?php	
			}
		?> 
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1><a href="#">�����źŴ���VLSI���</a></h1>
      <!--<p>��Ʒ�γ�</p>-->
    </div>
    <div id="topnav">
      <ul>
        <li class="active"><a href="#">�γ̽���</a></li>
        <li><a href="public/leadingteacher.php?pagename='leadingteacher.php'" >������ʦ</a></li>
        <li><a href="public/teachingteam.php">��ʦ�Ŷ�</a></li>
        <li><a href="public/teachingcontent.php">��ѧ����</a></li>
        <li><a href="public/coursevideo.php">�γ�¼��</a></li>
        <li><a href="public/reference.php">�ο�����</a></li>
        <li class="last"><a href="public/answeronline.php">���ߴ���</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="featured_slide">
    <div class="featured_box"><a href="#"><img src="images/1.jpg" alt="" /></a>
      <div class="floater">
        <h2>1. �������о����������ʿγ�</h2>
        <p> �����ʵ��ѧ�������źŴ���VLSI��ơ��γ̽����Ѿ���Ϊ������������������о����������ʿγ̡��������źŴ��� VLSI ��ơ������Ǵ��˲��������Ǵӿγ̽���ĽǶȿ������������ּ��ɵ�·�����γ��н�Ϊǰ�ػ�����Ŀγ̣���Ҫ���ź���ϵͳ�������źŴ������ּ��ɵ�·��ơ���������Զ�������Ļ���֪ʶ���Ǵ������ּ��ɵ�·��ϵͳ��ơ��������ͨ������Ӳ�Ʒ�������ر���һ��רҵ�γ̡�
</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
    </div>
    <div class="featured_box"><a href="#"><img src="images/2.jpg" alt="" /></a>
      <div class="floater">
        <h2>2.��ʦ�Ŷ�</h2>
        <p>��ѧ�Ŷӳ�Ա���ڴ���΢����ѧ��������ѧרҵ��˶ʿ�о����Ľ�ѧ��������Ҫ�е��ˡ������źŴ���VLSI��ơ������뵼�����������������ɵ�·��������ѧ����������������Ӽ���������΢���������ɿ��ԡ���רҵ�����μ�רҵ���Ŀγ̡�������м��̸���Ŀ�������ʡ�����̸���Ŀ4����ʡ������ѧ�ɹ���2�
</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
    </div>
    <div class="featured_box"><a href="#"><img src="images/3.jpg" alt="" /></a>
      <div class="floater">
        <h2>3. ��ѧ����</h2>
        <p>�γ�������"������ʵ����ѧ���ϣ��Թ���Ӧ��Ϊ����"�Ľ�ѧ����ڽ�ѧ�������ֶη����ȡ��һϵ�еľٴ룬ȡ�������õĽ�ѧЧ����</p><p>���γ����ǵ��Ӻ�ͨ����רҵ��רҵ�����γ̣�ʵ��Ӧ�÷�Χ�㷺���ڹ���רҵ�˲ŵ�ʵ�������ʹ�������������ռ����Ҫ��λ���ڸÿεĽ�ѧ��������ѭ����Ľ�ѧ���</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
    </div>
    <div class="featured_box"><a href="#"><img src="images/4.jpg" alt="" /></a>
      <div class="floater">
        <h2>4. ʦ������</h2>
        <p>�������źŴ���VLSI��ơ��γ̽��裬�ǳ�ע��ʦ����Ļ������������������ϵ����۽�ѧ�������µ�ʵ����ѧ��������ѧ����������Լ������ʣ�ͨ��ѧ�������������һЩ�����������ʶ���������ѧ���ۼ���Ƽ����������˽⡣
</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
    </div>
    <div class="featured_box"><a href="#"><img src="images/5.jpg" alt="" /></a>
      <div class="floater">
        <h2>5. ѧ������</h2>
        <p>�������źŴ���VLSI��ơ�������ע��ѧ����������Ρ���ھ����μӼ��ɵ�·�������Ĺ��ڼ����ʻ��顣��������а���"2013����΢�ɼ�����Ӧ�����ֻ�"���μ���2012��-2014�꼯�ɵ�·��Ʒֻ�ٰ��ICCAD��ᡣ
</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="homecontent">
    <div class="fl_left">
      <div class="column2">
       <h2>�γ̼��</h2>
            
            <p> �������źŴ���VLSI��ơ��������ʵ��ѧ��繤��ѧԺ����΢����ѧ��������ѧ����·��ϵͳ�����ɵ�·����רҵ�о����������һ��רҵ�γ̡�ѧʱ��Ϊ32ѧʱ��</p>
            <p>���γ���Ҫ���������źŴ�����㷨���㷨��VLSIӲ����Ƽ������������ݰ���������㷨������FIR�����˲����㷨��FPGAʵ�֡�IIR�����˲����㷨��FPGAʵ�֡�DFT�㷨��FPGA�Ż���Ƽ������༶�źŴ����Ӳ����ơ������߽硢��ˮ�߼����д����ض�ʱ��չ�����۵��������ṹ��Ƶȡ�</p>
            <div class="imgholder"><img src="images/6.jpg" class="imglist"alt="" /></div>
            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
        <br class="clear" />
        <h2> �γ̶�λ</h2>
            <div class="imgholder"></div>
            <p> �����ʵ��ѧ�������źŴ���VLSI��ơ��γ�ĿǰΪУ���о����������ʿγ̣��ڴ˻����ϣ��ÿγ̳�Ϊ������������������о����������ʿγ̡�</p><p>�������źŴ��� VLSI ��ơ������Ǵ��˲��������Ǵӿγ̽���ĽǶȿ������������ּ��ɵ�·�����γ��н�Ϊǰ�ػ�����Ŀγ̣���Ҫ���ź���ϵͳ�������źŴ������ּ��ɵ�·��ơ���������Զ�������Ļ���֪ʶ���Ǵ������ּ��ɵ�·��ϵͳ��ơ��������ͨ������Ӳ�Ʒ�������ر���һ��רҵ�γ̡����󽨳��������о����������ʿγ̣�Ϊ�����и�У�������γ��ṩ�����Ĺ�����Դ������������У���о���ѡ�޸ÿγ̡�</p>
            
            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
        <br class="clear" />
        <h2>��ѧ�ֶκͷ���</h2>
            <div class="imgholder"></div>
            <p> �����������ķ�ʽ���Ƚ��Ľ�ѧ��������չ��ѧ������ȣ��������۽�ѧ��ʵ���ѧ���ϵķ�ʽ����Σ��ڿ��ý�ѧ�����У���������ʽ������ʽ�ȿ��ý�ѧ�ֶΣ���������ѧ���Ŀ���ѧϰ�����ԣ��������Ƕ�һЩ�����������˼�����������ڿ��˻��ڣ����˿�������֪ʶ����Ϥ�̶ȣ�������Ҫ���ǲ�������ʵ����Ŀ������ѧ��������ɵ���Ƽ��������������۷����� ���ģ��ڿγ̽�ѧ��վ�ϣ��������ߴ���ר������ѧ���ṩʵʱ�������λ��ʦ�������⽻����������

</p>
            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
        <br class="clear" />
        
      </div>

    </div>
    <div class="fl_right">
      <h2>��ʦ�Ŷ�</h2>
      <ul>
        <li>
          <div class="imgholder"><a href="#"><img src="public/private/images/teachers/1.jpg" class="teacherlist" alt="" /></a></div>
          <p><strong><a href="#">��Ρ</a></strong></p>
          <p>��Ρ���У����������ˣ���ʿ�����ڣ�˶ʿ����ʦ�����ӿƼ���ѧ΢����ѧ��������ѧרҵ��ʿ���п�Ժ΢��������ʿ���廪��ѧ��Ϣ�����о�Ժ����ѧ�ߡ�����IEEE�߼���Ա���й�����ѧ��߼���Ա���й���ѧѧ��߼���Ա���й��ѧ���缼��רҵίԱ�᳣��ίԱ���������뼤�⹤�̡���ί�������ܲ���������ѧ�������»�����...</p>
          <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
        </li>
        <li>
          <div class="imgholder"><a href="#"><img src="public/private/images/teachers/zhangdeming.jpg" class="teacherlist" alt="" /></a></div>
          <p><strong><a href="#">�ŵ���</a></strong></p>
          <p>�ŵ����У�1955��5�³������㶫÷���ˣ������ʵ��ѧ�������ڡ�����Ժ"�����������"����ߣ��Ⱥ��"�Ĵ�ʡ���������ʦ"��"�ʵ粿��������Ǹɽ�ʦ"��"�ʵ粿��ͻ������ר��"��"ȫ��ʦ���Ƚ�����"��"�����������ʦ"��"��������ʦ"�������ƺš�������������Ϣ��ѧ�빤�����ѧָ����ίԱ��ίԱ���й�����ѧ�ᡢ�й�ͨ��ѧ��߼���Ա�������е���ͨ��ѧ��ͨ�������ԴרҵίԱ��ίԱ�������е�һ����ЭίԱ...</p>
          <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
        </li>
        <li>
          <div class="imgholder"><a href="#"><img src="public/private/images/teachers/yanghong.jpg " class="teacherlist" alt="" /></a></div>
          <p><strong><a href="#">���</a></strong></p>
          <p>��磬�У����ڣ�1966��6�������Ĵ���Ϫ�ˣ�1988���ҵ�ڶ��ϴ�ѧ�뵼����������רҵ����ѧѧʿѧλ��1995��8�±�ҵ�ڵ��ӿƼ���ѧ���Ӳ�����Ԫ����רҵ����ѧ˶ʿѧλ����Ҫ���µ��ӿ�ѧ�뼼��ѧ�ơ�΢����ѧ��������ѧѧ�ƿ��кͽ�ѧ���������ι�繤��ѧԺ��Ժ���������а뵼����ҵЭ�����¡��й�ͨ��ѧ���Ա��2004����׽������и�У��������Ǹɽ�ʦ��2008���ѧУ�����о�����ʦ...</p>
          <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
        </li>
        <li>
          <div class="imgholder"><a href="#"><img src="public/private/images/teachers/pangyu.jpg" class="teacherlist" alt="" /></a></div>
          <p><strong><a href="#">����</a></strong></p>
          <p>���1978�����������ʵ��ѧ���ѧԺ�����ڡ�ĿǰΪIEEE��Ա���ܼ��ô���Ȼ��ѧ�빤�����»ᣨNatural Sciences and Engineering Research Council of Canada, NSERC������������Ȼ��ѧ��Ƽ��о�����Fonds Qu��b��cois de la Recherchesur la Nature et les Technologies��FQRNT������...</p>
          <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
        </li>
        <li>
          <div class="imgholder"><a href="#"><img src="public/private/images/teachers/zhanghongsheng.jpg" class="teacherlist" alt="" /></a></div>
          <p><strong><a href="#">�ź���</a></strong></p>
          <p>�ź������У�1980��7��������ʿ�������ڣ�˶ʿ����ʦ���ֱ���2001��2004��2012������������΢����רҵ��ѧʿ��˶ʿ�Ͳ�ʿѧλ�����ڴ���DABϵͳ��оƬ����о�...</p>
          <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
        </li>
        <li class="last">
          <div class="imgholder"><a href="#"><img src="public/private/images/teachers/yuanjun.jpg" class="teacherlist" alt="" /></a></div>
          <p><strong><a href="#">Ԭ��</a></strong></p>
          <p>Ԭ�����У���ʿ�������ڡ�

2012���ҵ���ձ���֪���ƴ�ѧ����ʿѧλ��Ԭ��ʿ���ڴ���ģ���ϵ�·�Ĳ��Լ���֤������о�����...</p>
		<p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
        </li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2015 - All Rights Reserved - <a href="http://www.cqupt.edu.cn">�����ʵ��ѧ</a> <a href="#"> ��繤��ѧԺ</a></p>
	
		  
	
	<p class="fl_right">
	<?php 
		date_default_timezone_set('Asia/Shanghai');//����ʱ��
		$time=date('y-m-d H:i:s',time());
		echo "����ʱ�䣺20".$time;
	?>
	</p>
	
    <br class="clear" />
	
	<p class="fl_left">
		<?php 
			include("public/getip.php");
			include("public/counts_visitors.php");
			$ip=get_real_ip(); 
			echo "����IP��".$ip;
		?>
	</p>
	
	<br class="clear" />
	<p class="fl_left">
	<?php 
		echo "��վ�ۼƷ��ʴ�����".$countstr;
	?>
	</p>
	<br class="clear" />
  </div>
</div>
</body>
</html>
