<?php
	if(isset($_POST["Submit"]) && $_POST["Submit"] == "ע��")
	{
		$user = $_POST["username"];
		$psw = md5($_POST["password"]);
		$email=$_POST["email"];
		$phone=$_POST["phone"];
		$psw_confirm = md5($_POST["confirm"]);
		
		if($user == "" || $psw == "" || $psw_confirm == "")
		{
			echo "<script>alert('��ȷ����Ϣ�����ԣ�'); history.go(-1);</script>";
		}
		else
		{
			if($psw == $psw_confirm)
			{
				$con=mysql_connect("116.255.150.169:3306","larrychen_f","a619841516");	//�������ݿ�
				if (!$con)
				 {
				  die('Could not connect: ' . mysql_error());
				  }

				$db=mysql_select_db("larrychen");	//ѡ�����ݿ�
				/****************������ݿ��Ƿ����*****************/
				if(!$db)
				{
					/***************�������ݿ⣺myschool*****************/
					$sql="CREATE DATABASE larrychen";
					mysql_query($sql,$con);
				}
				mysql_query("set names 'gbk'");	//�趨�ַ���
				$sql = "select username from user where username = '$_POST[username]'";	//SQL���
				$result = mysql_query($sql,$con);	//ִ��SQL���
				/****************������ݱ��Ƿ����*****************/
				if(!$result)
				{
					/***************�������ݱ�user*****************/
					$sql = "CREATE TABLE `larrychen`.`user` (`ID` INT(16) NOT NULL AUTO_INCREMENT PRIMARY KEY, `username` VARCHAR(16) CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL, `password` CHAR(32) NOT NULL, `email` VARCHAR(24) NOT NULL, `phone` CHAR(16) NOT NULL) ENGINE = InnoDB;";
					mysql_query($sql,$con);
					$sql = "ALTER TABLE `user` ADD UNIQUE( `ID`);";
					mysql_query($sql,$con);
					$sql = "ALTER TABLE `user` ADD INDEX(`ID`);";
					mysql_query($sql,$con);
					//echo "database created";
				}	
				$sql = "select username from user where username = '$_POST[username]'";	//SQL���
				$result = mysql_query($sql,$con);	//ִ��SQL���
				$num = mysql_num_rows($result);	//ͳ��ִ�н��Ӱ�������
				if($num)	//����Ѿ����ڸ��û�
				{
					echo "<script>alert('�û����Ѵ���'); history.go(-1);</script>";
				}
				else	//�����ڵ�ǰע���û�����
				{			
					$sql = "INSERT INTO `larrychen`.`user` (`ID`, `username`, `password`, `email`, `phone`) VALUES (NULL, '$user', '$psw', '$email', '$phone');";
					//echo $sql;
					$res_insert = mysql_query($sql,$con);
					if($res_insert)
					{
						//echo "<script>alert('ע��ɹ���'); history.go(-1);</script>";
						echo "<script>alert('ע��ɹ���'); window.location.href='../index.php';</script>";
					}
					else
					{
						echo "<script>alert('ϵͳ��æ�����Ժ�'); history.go(-1);</script>";
					}
				}
			}
			else
			{
				echo "<script>alert('���벻һ�£�'); history.go(-1);</script>";
			}
		}
	}
	else
	{
		echo "<script>alert('�ύδ�ɹ���'); history.go(-1);</script>";
	}
	/*******�ر����ݿ�*********/
	mysql_close($con);
?>