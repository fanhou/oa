<?php
	session_start();
	include "../inc/chec.php";
	include "../conn/conn.php";
if(($_POST[a_title] != "") and ($_POST[a_content] != "")){
		$i_sql = "insert into tb_iss values('','".$_POST[a_title]."','".$_POST[a_content]."',now(),'3','".$_SESSION[id]."')";
		$i_rst = mysql_query($i_sql,$conn);
		if($i_rst){
			echo "<script>alert('添加成功!!');location='au_issuance.php';</script>";
		}else{
			echo "<script>alert('系统繁忙,请稍后再试！！');history.go(-1);</script>";
		}
	}else{
		echo "<script>alert('请正确输入');history.go(-1);</script>";
	}
?>
