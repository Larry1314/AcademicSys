<?php
include_once("header.php");
?>
<?php
	
	
	if(isset($_POST["submit"]) && $_POST["submit"] == "�ύ")
	{
		if(isset($_SESSION['permission'])&&$_SESSION['permission']==1)
		{/***************����Ա��½*************************/
			$questionid=$_POST['questionid'];
			$answer=$_POST['answer'];
			$con=mysql_connect("116.255.150.169:3306","larrychen_f","a619841516");	//�������ݿ�

			if (!$con)
			{
				die('Could not connect: ' . mysql_error());
				}

			$db=mysql_select_db("larrychen");	//ѡ�����ݿ�
			mysql_query("set names 'gbk'");	//�趨�ַ���
			$sql="UPDATE `larrychen`.`questionlist` SET `answer`='$answer' WHERE `ID`=$questionid;";
			$res_insert = mysql_query($sql,$con);
			if($res_insert)
			{
							
				echo "<script>alert('���ύ�ɹ���'); window.location.href='answeronline.php';</script>";
			}
			else
			{
				//echo "<script>alert('ϵͳ��æ�����Ժ�'); history.go(-1);</script>";
			}
		}
		else
		{/***************�û���½��½*************************/
		$question = $_POST["question"];
		$description = $_POST["description"];
		$email=$_POST["email"];
		$password=$_POST["password"];
		date_default_timezone_set('Asia/Shanghai');//����ʱ��
		$time=date('y-m-d H:i:s',time());
		if(!isset($_SESSION['user_id'])){
				echo "<script>alert('���¼�����ύ���⣡');</script>";
		}else
		{
			//echo $question.$description.$email.$password;
			if($question == "" || $description == "" || $email == ""|| $password == "")
			{
				echo "<script>alert('��ȷ����Ϣ�����ԣ�'); history.go(-1);</script>";
			}
			else
			{
				
					$con=mysql_connect("116.255.150.169:3306","larrychen_f","a619841516");	//�������ݿ�

					if (!$con)
					 {
					  die('Could not connect: ' . mysql_error());
					  }

					$db=mysql_select_db("larrychen");	//ѡ�����ݿ�
					mysql_query("set names 'gbk'");	//�趨�ַ���
					/****************������ݿ��Ƿ����*****************/
					if(!$db)
					{
						/***************�������ݿ⣺larrychen*****************/
						$sql="CREATE DATABASE larrychen";
						mysql_query($sql,$con);
						//echo "database created";
					}else{/********************������ݱ�questionlist�Ƿ����***************************/	
						//echo "<script>alert('���ڴ������ݿ⣡'); </script>";
						$sql = "SELECT * FROM  `questionlist` WHERE  `question` =  '$question'";	//SQL���
						$result = mysql_query($sql,$con);	//ִ��SQL���
						if(!$result){
						/***************δ��ѯ��������ʹ������ݱ�questionlist*****************/
						$sql = "CREATE TABLE `larrychen`.`questionlist` (`ID` TINYINT(16) NOT NULL AUTO_INCREMENT PRIMARY KEY, `question` VARCHAR(128) CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL, `description` CHAR(128) CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL,`answer` CHAR(128) CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL, `email` VARCHAR(16) NOT NULL, `password` CHAR(16) NOT NULL) ENGINE = InnoDB;";
						mysql_query($sql,$con);
						$sql = "ALTER TABLE `user` ADD UNIQUE( `ID`);";
						mysql_query($sql,$con);
						$sql = "ALTER TABLE `user` ADD INDEX(`ID`);";
						mysql_query($sql,$con);
						$sql = "ALTER TABLE `questionlist` ADD `Time` DATETIME NOT NULL;";
						mysql_query($sql,$con);
						//echo "<script>alert('���ݿⴴ���ɹ���'); </script>";
						
						}
					}
					$sql = "SELECT * FROM  `questionlist` WHERE  `question` =  '$question'";	//SQL���
					$result = mysql_query($sql,$con);	//ִ��SQL���
					$num = mysql_num_rows($result);	//ͳ��ִ�н��Ӱ�������
					if(!$num)	//��������ڸ�����
					{
						//echo "��ѯ�����".$num;
						$sql="INSERT INTO `larrychen`.`questionlist` (`ID`, `question`, `description`, `email`, `password`,`Time`) VALUES (NULL, '$question', '$description', '$email', '$password','$time');";
						//echo $sql;
						$res_insert = mysql_query($sql,$con);
						if($res_insert)
						{
							
							echo "<script>alert('�����ύ�ɹ���'); window.location.href='answeronline.php';</script>";
						}
						else
						{
							echo "<script>alert('ϵͳ��æ�����Ժ�'); history.go(-1);</script>";
						}
					}
					else	//������ڸ�����
					{			
						echo "<script>alert('�������Ѿ����ڣ�'); history.go(-1);</script>";
						
					}
				mysql_close($con);
				}
			}
		/*******�ر����ݿ�*********/
		}
	}
	else
	{
		//echo "<script>alert('�ύδ�ɹ���'); history.go(-1);</script>";
		//echo "<script>alert('�ύδ�ɹ���'); </script>";
	}
	
?>
<link rel="stylesheet" href="private/styles/answeronline.css" type="text/css" />
<link rel="stylesheet" href="private/styles/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="private/styles/form.css" type="text/css" />
<script type="text/javascript" src="private/scripts/utility.js"></script>   
<div id="homecontent" class="answerlist">
    <div class="all_left">
	<!--list-->
    
    <div class="sample">
        <h1>���ߴ���</h1>
		
		<dl class="faqs">
<!--	<dt>Is this the first question?</dt>
        <dd>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.</dd>
        <dt>If the previous was the first question this must be the second one. Isn't it?</dt>
        <dd>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. </dd>
        <dt>And what about the third question?</dt>
        <dd>Nam eget dui. Etiam rhoncus. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. </dd>
-->		<ol class="questionlist">
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
			$sql = "SELECT * FROM  `questionlist`";	//SQL���
			$result = mysql_query($sql,$con);	//ִ��SQL���
			if(!$result)
			{
				/***************δ��ѯ��������ʹ������ݱ�questionlist*****************/
				$sql = "CREATE TABLE `larrychen`.`questionlist` (`ID` TINYINT(16) NOT NULL AUTO_INCREMENT PRIMARY KEY, `question` VARCHAR(128) CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL, `description` CHAR(128) CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL,`answer` CHAR(128) CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL, `email` VARCHAR(16) NOT NULL, `password` CHAR(16) NOT NULL) ENGINE = InnoDB;";
				mysql_query($sql,$con);
				$sql = "ALTER TABLE `user` ADD UNIQUE( `ID`);";
				mysql_query($sql,$con);
				$sql = "ALTER TABLE `user` ADD INDEX(`ID`);";
				mysql_query($sql,$con);
				$sql = "ALTER TABLE  `questionlist` ADD  `Time` DATETIME NOT NULL ;";
				mysql_query($sql,$con);
				//echo "<script>alert('���ݿⴴ���ɹ���'); </script>";			
			}
		}
		
		$sql = "SELECT * FROM  `questionlist`";	//SQL���
		$result = mysql_query($sql,$con);	//ִ��SQL���
		$time=date('y-m-d H:i:s',time());		
		while($row = mysql_fetch_array($result))	//��������������ʽ������������)
		{
		?>
		
		<li><dt><?php echo $row['question'].":".$row['description']."��[".$row['Time']."]";?></dt>
		<dd><?php if($row['answer']!=""){
			echo $row['answer'];
			}else {
				echo "�ȴ��ش�...";
				}
				?>
				</dd>
			</li>
		<?php
		}
		?>
			</dl> 
		</ol>		
		<?php	
		if(isset($_SESSION['permission'])&&$_SESSION['permission']==1)
		{
		?>
			<p class="readmore"><a href="answermanage.php" class="">�������&raquo;</a></p>
		<?php
			}
		?>
	</div>
	<!--end list-->
    <!--form-->
    <div class="register-container container">
            <div class="row">
            
                <div class="register span6">
					
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                        <h3>
						<?php	
						if(isset($_SESSION['permission'])&&$_SESSION['permission']==1)
						{
							echo "�ύ��";
						}else{
						?>
						�ύ�������
						<?php
							}
						?> <span class="red"><strong>Now!</strong></span></h3>
                        <label for="firstname">
						<?php	
						if(isset($_SESSION['permission'])&&$_SESSION['permission']==1)
						{
							echo "��ѡ��Ҫ�ش�����⣺";
						}else{
						?>
						����
						<?php
							}
						?>
						</label>
						<?php
						if(isset($_SESSION['permission'])&&$_SESSION['permission']==1)
						{
						?>
						<select name="questionid" class="selectquestion">
							<?php 
							$con=mysql_connect("116.255.150.169:3306","larrychen_f","a619841516");	//�������ݿ�

							$db=mysql_select_db("larrychen");	//ѡ�����ݿ�
							mysql_query("set names 'gbk'");	//�趨�ַ���
							if (!$con)
							{
								die('Could not connect: ' . mysql_error());
								}	
							$sql = "SELECT * FROM  `questionlist`";	//SQL���
							$result = mysql_query($sql,$con);	//ִ��SQL���
							while($row = mysql_fetch_array($result))	//��������������ʽ������������)
							{
								echo "<option value=".$row['ID'].">".$row['question']."</option>";
								};
							?>
						</select>
						<?php 
						}
						else
						{
						?>
						<input type="text" id="firstname" name="<?php	
							if(isset($_SESSION['permission'])&&$_SESSION['permission']==1)
							{
							echo "questionid";
							}else{
							echo "question";
							}
							?>" placeholder="<?php	
							if(isset($_SESSION['permission'])&&$_SESSION['permission']==1)
							{
							echo "��ѡ��Ҫ�ش�����⣺";
							}else{
							echo "enter your question...";
							}
							?>">
						<?php
						}
						?>
                        <label for="lastname">
						<?php	
						if(isset($_SESSION['permission'])&&$_SESSION['permission']==1)
						{
							echo "��";
						}else{
						?>
						����
						<?php
							}
						?>
						</label>
                        <input type="text" id="lastname" name="<?php	
						if(isset($_SESSION['permission'])&&$_SESSION['permission']==1)
						{
							echo "answer";
						}else{
							echo "description";
						}
						?>" placeholder="<?php	
						if(isset($_SESSION['permission'])&&$_SESSION['permission']==1)
						{
							echo "enter the answer...";
						}else{
							echo "enter detail description...";
						}
						?>">
						<?php	
						if(!isset($_SESSION['permission'])||$_SESSION['permission']!=1)
						{
						?>
						
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="enter your email...">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="choose a password...">
						<?php
						}
						?>
                        <button type="submit" name="submit" value="�ύ">�ύ</button>
                    </form>
	
                </div>
            </div>
        </div>
    
    <!--end form-->
	</div>
</div>
<?php
include_once("footer.php");
?>