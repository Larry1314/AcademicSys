
<!-- ####################################################################################################### -->
<div class="wrapper col5">
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
			include("getip.php");
			include("counts_visitors.php");
			$ip=get_real_ip(); 
			echo "����IP��".$ip;
		?>
	</p>
	<br class="clear" />
	<!--<p class="fl_left">
		<?php 
		echo "��վ�ۼƷ��ʴ�����".$countstr;
		?>
	</p>-->
	<br class="clear" />
	<br class="clear" />
  </div>
</div>
</body>
</html>