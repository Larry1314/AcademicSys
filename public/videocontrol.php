<?php
include_once("header.php");
?>

<!--content-->
<link href="private/styles/coursevideo.css" rel="stylesheet" type="text/css" />
    <!--content-->
    <div id="homecontent">
		<div class="all_left">
			<div class="column2">
			<h2>��Ƶ����</h2>
            <div class='imgholder'></div>
            
           <ol class="videolist">
			<?php
			$con=mysql_connect("116.255.150.169:3306","larrychen_f","a619841516");	//�������ݿ�

			$db=mysql_select_db("larrychen");	//ѡ�����ݿ�
			mysql_query("set names 'gbk'");	//�趨�ַ���
			if (!$con)
			{
				die('Could not connect: ' . mysql_error());
			}
			if(!$con)
			{
				/***************�������ݿ⣺myschool*****************/
				$sql="CREATE DATABASE larrychen";
				mysql_query($sql,$con);
				//echo "database created";
			}else
			{/********************������ݱ�questionlist�Ƿ����***************************/	
				//echo "<script>alert('���ڴ������ݿ⣡'); </script>";
				$sql = "SELECT * FROM  `videolist`";	//SQL���
				$result = mysql_query($sql,$con);	//ִ��SQL���
				if(!$result)
				{
					/***************δ��ѯ��������ʹ������ݱ�questionlist*****************/
					$sql = "CREATE TABLE `larrychen`.`videolist` (`ID` TINYINT(16) NOT NULL AUTO_INCREMENT PRIMARY KEY, `coursename` VARCHAR(128) CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL,`videoname` CHAR(128) CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL, `description` CHAR(128) CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL) ENGINE = InnoDB;";
					//echo $sql;
					mysql_query($sql,$con);
					$sql = "ALTER TABLE `user` ADD UNIQUE( `ID`);";
					mysql_query($sql,$con);
					$sql = "ALTER TABLE `user` ADD INDEX(`ID`);";
					mysql_query($sql,$con);
					$sql = "ALTER TABLE `videolist` ADD  `Time` DATETIME NOT NULL ;";
					//echo $sql;
					mysql_query($sql,$con);
					//echo "<script>alert('���ݿⴴ���ɹ���'); </script>";			
				}
			}
			
			
			$sql = "SELECT * FROM  `videolist`";	//SQL���
			$result = mysql_query($sql,$con);	//ִ��SQL���
			date_default_timezone_set('Asia/Shanghai');//����ʱ��
			$time=date('y-m-d H:i:s',time());		
			while($row = mysql_fetch_array($result))	//��������������ʽ������������)
			{
			?>
			<li> 
			<p class="video_name"> <?php echo "��".$row['coursename']."��";?></p>
            
			<p> <?php echo $row['description'];?></p>
            <p class="readmore"> <?php echo "�ϴ�ʱ�䣺".$row['Time'];?></p>
				<div class="play">
				<p class="readmore">
				<a href="removevideo.php?rmid=<?php echo $row['ID'];?>&videoname=<?php echo $row['videoname'];?>" class="show" name="">ɾ��������¼ &raquo;</a>
				</p>
				</div>
           </p>
       
            </li>
            	
                 <?php
					}
		  		 ?>
			
        	<br class='clear'>
			</ol>

			</div>
		</div>
		<!--video-->
		<p class="readmore">
           	<a href="videoupload.php" class="show" name="">��Ƶ�ϴ�&raquo;</a>
		</p>
		<br class="clear">
	</div>
<!--end content--->

<?php
include_once("footer.php");
?>