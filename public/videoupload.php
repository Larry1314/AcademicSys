<?php
include_once("header.php");
?>
<link rel="stylesheet" href="private/styles/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="private/styles/form.css" type="text/css" />
<script type="text/javascript" src="private/scripts/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
	//google��֤
	$("#getcode_gg").click(function(){
		$(this).attr("src",'code_gg.php?' + Math.random());
	});
	$(".code_input").mouseleave(function(){
		var code_gg = $("#code_gg").val();
		$.post("chk_code.php?act=gg",{code:code_gg},function(msg){
			if(msg==1){
				//alert("��֤����ȷ��");
			}else{
				//alert("��֤�����");
			}
		});
	});

});
</script>
<?php
	if(isset($_POST["submit"]) && $_POST["submit"] == "�ϴ�")
	{			//�ж��Ƿ�ִ���ύ����
		$coursename=$_POST['coursename'];
		$description=$_POST['description'];
		if(!is_dir("videos"))
		{			//�ж�ָ���ļ����Ƿ����
			mkdir("videos");			//�����ļ���
		}
		$file=$_FILES['videoname']['name'];			//��ȡ���ύ���ļ�����
		//echo "<script>alert('���ڴ���'); </script>";		
		if($_FILES['videoname']['error']>0)
		{						//�ж��ļ��Ƿ�����ϴ���������
			//echo "�ϴ�����:";
			switch($_FILES['videoname']['error'])
			{
				case 1:
					echo "<script>alert('�ϴ��ļ���С���������ļ��涨ֵ'); history.go(-1);</script>";
				break;
				case 2:
					echo "<script>alert('�ϴ��ļ���С��������Լ��ֵ'); history.go(-1);</script>";
				break;
				case 3:
					echo "�ϴ��ļ���ȫ";
				break;
				case 4:
					echo "<script>alert('û���ϴ��ļ�'); history.go(-1);</script>";
				break;	
			}
		}else
		{
			if(is_uploaded_file($_FILES["videoname"]["tmp_name"]))
			{	//���ύ������֤
				date_default_timezone_set('Asia/Shanghai');//����ʱ��
				//$time=date('y-m-d H:i:s',time());
				$floatTime=time();
				$str=substr($_FILES['videoname']['name'],-4,4);
				$path="videos/".$floatTime.$str;
				$con=mysql_connect("116.255.150.169:3306","larrychen_f","a619841516");	//�������ݿ�

				if (!$con)
				{
					die('Could not connect: ' . mysql_error());
					}
				$db=mysql_select_db("larrychen");	//ѡ�����ݿ�
				mysql_query("set names 'gbk'");	//�趨�ַ���
				$floatTime=$floatTime.$str;
				$time=date('y-m-d H:i:s',time());
				$sql_1="INSERT INTO `larrychen`.`videolist` (`ID`, `coursename`, `videoname`, `description`, `Time`) VALUES (NULL, '$coursename', '$floatTime', '$description', '$time');";
				mysql_query($sql_1);
				if(move_uploaded_file($_FILES["videoname"]["tmp_name"],$path))
				{	//ִ���ļ��ϴ�����
					echo "<script> alert('��Ƶ�ϴ��ɹ�');</script>";
					
					$home_url = 'coursevideo.php';
					header('Location: '.$home_url);
				}else {
					echo "<script>alert('��Ƶ�ϴ�ʧ�ܣ�'); </script>";	
				}	
			}
		}
	}
	?>
<!--content-->
<link href="private/styles/coursevideo.css" rel="stylesheet" type="text/css" />
    <!--content-->
    <div id="homecontent">
		<div class="all_left">
			<div class="column2">
			<h2>��Ƶ����</h2>
            <div class='imgholder'></div>
			
			</div>
		
		</div>
		
		<div class="register-container container">
            <div class="row">
            
                <div class="register span6">
                    <form action="videoupload.php"  enctype="multipart/form-data" method="post">
                        <h3>�ϴ���Ƶ <span class="red"><strong>Now!</strong></span></h3>
                        <label for="firstname">�γ����ƣ�</label>
                        <input type="text" id="firstname" name="coursename" placeholder="enter the coursename...">
                        <label for="lastname">��Ƶ����</label>
                        <input type="text" id="lastname" name="description" placeholder="enter the description...">
						
						<label for="firstname">ѡ����Ƶ�ļ���</label>                       
                        <input type="hidden" name="MAX_FILE_SIZE" value="1000000000">
						<input type="file" id="lastname" name="videoname">
						<!--<label for="firstname">��֤�룺</label>   
                        <input type="text" class="code_input" id="code_gg" placeholder="enter your checkcode..."/> <img src="code_gg.php" id="getcode_gg" title="�����壬�����һ��" align="absmiddle">-->
                        <button type="submit" name="submit" value="�ϴ�">�ϴ�</button>
                    </form>
                </div>
            </div>
        </div>
    
		<br class="clear">
	</div>
<!--end content--->

<?php
include_once("footer.php");
?>