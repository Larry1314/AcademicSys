<?php
//ͳ���ļ�
    $countfile    =    'count.txt';

    //����ʽ��ͳ���ļ�
    if($fp        =    fopen($countfile,'r+')){
        $num    =    fread($fp,8);
        $num    =    $num+1;
    }
    fclose($fp);

    //д��ʽ��ͳ���ļ�
    $fp            =    fopen($countfile,'w+');
    fwrite($fp,$num);
    fclose($fp);
    //ֻ����ʽ��ͳ���ļ�
    $fp                =    fopen($countfile,'r');
    $n                =    0;
    $countarray        =    array();
    while(false!==($countnum=fgetc($fp))){
        $countarray[$n]    =    $countnum;
        $n++;
    }
    $countstr        =    "";
    $emptystr        =   "";
    foreach($countarray as $value){
       // �������������Ӧ������ͼƬ 
        //$countstr.=       $emptystr ."images/" .$value.".jpg";
        //$emptystr=       "&nbsp;&nbsp;";
		$countstr.=$value;
    }
   
?>
