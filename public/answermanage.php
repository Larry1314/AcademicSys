<?php
include_once("header.php");
?>
<link href="private/styles/coursevideo.css" rel="stylesheet" type="text/css" />
<!--content-->
    <div id="homecontent">
    <div class="all_left">
      <div class="column2">
	  <ol class="videolist">
        
		<?php
		
		$con=mysql_connect("116.255.150.169:3306","larrychen_f","a619841516");	

		if (!$con)
		{
			die('Could not connect: ' . mysql_error());
			}
		$db=mysql_select_db("larrychen");	//ѡ�����ݿ�
		mysql_query("set names 'gbk'");	//�趨�ַ���
		$sql = "SELECT * FROM  `questionlist`";	//SQL���
		$result = mysql_query($sql,$con);	//ִ��SQL���
		$num = mysql_num_rows($result);	//ͳ��ִ�н��Ӱ�������
		while($row = mysql_fetch_array($result))	//��������������ʽ������������)
		{
		?>
		<li>
			
			<?php 
			echo "���⣺".$row['question']."��[".$row['Time']."]";
			echo "<p>������".$row['description']."</p>";
			?>
            <div class='imgholder'></div>
            <p>
			<?php 
			if($row['answer']!=""){
			echo "�𰸣�<strong color='blue'>".$row['answer']."</strong>";
			}else{
				echo "�𰸣�"."�ȴ��ش�...";
				}
				?>
            </p>
			
           
			<p class="readmore"><a href="delte.php?delteid=<?php echo $row['ID'];?>">ɾ��������¼ &raquo;</a></p>	
			<br class='clear'>
			</li>
		<?php
		}
		?>
        </ol>
      </div>

    </div>
    
    <br class="clear">
  </div>
    <!--end content-->


<?php
include_once("footer.php");
?>
