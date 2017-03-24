<?php
include_once("header.php");
?>
<link rel="stylesheet" href="private/styles/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="private/styles/form.css" type="text/css" />

<script type="text/javascript" src="private/scripts/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
	/*ƥ���û���*/
	$("input#firstname").mouseleave(function(){
	var preg = /^[\u4e00-\u9fa5A-Za-z0-9_]+$/; //ƥ���û���
	var username=$("input#firstname").attr("value");	
	
	if(preg.test(username))
	{
		$("p.username").text(" ");
	}
	else{
		$("p.username").text("�û�����ʽ������ʹ������,��ĸ,�»���,���ĵ���ϣ�");
		}
	});
	
	/***����������ʽ***/
	$("input#email").mouseleave(function(){
	var preg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/; //ƥ��Email 
	var email=$("input#email").attr("value");	
	
	if(preg.test(email))
	{
		//$("p.email").text("�����ʽ��ȷ��");
		$("p.email").text(" ");
	}
	else{
		$("p.email").text("�����ʽ����");
		}
	});
	/**ƥ��绰*/
	/***����������ʽ***/
	$("input#phone").mouseleave(function(){
	var preg = /^1\d{10}$/; //ƥ��绰
	var email=$("input#phone").attr("value");	
	
	if(preg.test(email))
	{
		//$("p.phone").text("�绰��ʽ��ȷ��");
		$("p.phone").text(" ");
	}
	else{
		$("p.phone").text("�绰��ʽ����");
		}
	});
	//google��֤
	$("#getcode_gg").click(function(){
		$(this).attr("src",'code_gg.php?' + Math.random());
	});
	$(".code_input").mouseleave(function(){
		var code_gg = $("#code_gg").val();
		$.post("chk_code.php?act=gg",{code:code_gg},function(msg){
			if(msg==1){
				
				//$("p.code_input").text("��֤����ȷ��");
				$("p.code_input").text(" ");
			}else{
				
				$("p.code_input").text("��֤�����");
			}
		});
	});

});
</script>
<div id="homecontent">
	
	<div class="register-container container">
            <div class="row">
            
                <div class="register span6">
                    <form action="regcheck.php" method="post">
                        <h3>����ע�� <span class="red"><strong>Now!</strong></span></h3>
                        <label for="firstname">�û�����<p class="username"> </p></label>
                        <input type="text" id="firstname" name="username" placeholder="enter your username...">
                        <label for="lastname">���룺<p class="password"> </p></label>
                        <input type="password" id="lastname" name="password" placeholder="enter your password...">
						<label for="lastname">ȷ�����룺<p class="confirmpwd"> </p></label>
                        <input type="password" id="lastname" name="confirm" placeholder="confirm your password...">
                        <label for="email">Email��<p class="email"> </p></label>
                        <input type="text" id="email" name="email" placeholder="enter your email...">
                        <label for="password">�绰��<p class="phone"> </p></label>
                        <input type="text" id="phone" name="phone" placeholder="enter your phone...">
                        <label for="password">��֤�룺<p class="code_input"> </p></label>
                        <input type="text" class="code_input" id="code_gg" placeholder="enter your checkcode..."/> <img src="code_gg.php" id="getcode_gg" title="�����壬�����һ��" align="absmiddle">
                        <button type="Submit" name="Submit" value="ע��">ע��</button>
                    </form>
                </div>
            </div>
        </div>
    <br class="clear">
  </div>
    <!--end content-->


<?php
include_once("footer.php");
?>