<?php
include_once("header.php");
?>
<!--content-->
    <div id="homecontent">
    <div class="all_left">
<?php
		$con=mysql_connect("116.255.150.169:3306","larrychen_f","a619841516");	//�������ݿ�

		if (!$con)
		{
			die('Could not connect: ' . mysql_error());
			}
		$db=mysql_select_db("larrychen");	//ѡ�����ݿ�
		mysql_query("set names 'gbk'");	//�趨�ַ���
		if(isset($_GET['rmid'])&&$_GET['rmid']!='')
		{
			$rmid=$_GET['rmid'];
			$videoname=$_GET['videoname'];
			//echo "����ɾ���ļ�¼��".$rmid;
			$sql="DELETE FROM  `larrychen`.`videolist` WHERE  `videolist`.`ID` = $rmid "; 
			
			$result = mysql_query($sql,$con);	//ִ��SQL���
			$FilePath="videos/".$videoname;
			
			//ɾ���ļ���Ŀ¼ 
			if(is_file($FilePath))
			{ 
				if(unlink($FilePath))
				{ 
					echo "<script> alert("."'"."�����ļ���".$FilePath."ɾ���ɹ���"."'".");</script>"; 
				}else
				{ 
					echo "<script> alert("."'"."�����ļ���".$FilePath."ɾ��ʧ�ܣ������޸��ļ�Ȩ��ɾ��..."."'".");</script>";
					if(chmod($FilePath,0777))
					{ 
						unlink($FilePath); 
						echo "<script> alert("."'"."�����ļ���".$FilePath."Ȩ���޸ĺ�ɾ����ϣ�"."'".");</script>";
					}else
					{ 
						echo "<script> alert("."'"."�����ļ���".$FilePath."�޷�ͨ��WEB��ʽɾ����������FTPȨ�޶Դ��ļ��������ã�"."'".");</script>";
					} 
				} 
			}  
		}else
		{
			echo "<script>alert('ɾ��ʧ�ܣ�');</script>";
		}
		$home_url = 'videocontrol.php';
		header('Location: '.$home_url);
?>

    </div>
    
    <br class="clear">
  </div>
<?php
include_once("footer.php");
?>
