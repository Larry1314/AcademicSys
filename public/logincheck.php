<?php
/*��ʼһ���Ự*/
session_start();
$lastpage=$_GET['page'];
$error_msg = "";
//����û�δ��¼����δ����$_SESSION['user_id']ʱ��ִ�����´���
if(!isset($_SESSION['user_id'])){
	if(isset($_POST["submit"]) && $_POST["submit"] == "��½")
	{
		$user = $_POST["username"];
		$psw = md5($_POST["password"]);
		if($user == "" || $psw == "")
		{
			echo "<script>alert('�������û��������룡'); history.go(-1);</script>";
		}
		else
		{
			$con=mysql_connect("116.255.150.169:3306","larrychen_f","a619841516");	//�������ݿ�

			mysql_select_db("larrychen");
			mysql_query("set names 'gbk'");
			/*********************************ȡ����һ��*********************************/
			$sql = "select * from user where username = '$user' and password = '$psw'";
			$result = mysql_query($sql);
			$num = mysql_num_rows($result);
			if($num==1)
			{
				$row = mysql_fetch_array($result);	//��������������ʽ������������
				$_SESSION['user_id']=$row['ID'];
                $_SESSION['username']=$row['username'];
				//echo $row['ID'].$row['username'].$row['email'].$row['phone'];
				//echo "<script>alert('��½�ɹ���'); window.location.href='../index.php';</script>";
				//echo $lastpage;
                if($psw=='228cb804830fa11f765a66e5a37daa67')
                {
					$_SESSION['permission']=1;
                }
				echo "<script>alert('��½�ɹ���');</script>";
				$home_url = '../index.php';
				
				
				
               header('Location: '.$home_url);
			}
			else
			{
				echo "<script>alert('�û��������벻��ȷ��');history.go(-1);</script>";
			}
		}
	}
}else
	{
		echo "<script>alert('�ύδ�ɹ���'); history.go(-1);</script>";
	}

?>