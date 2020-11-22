<?php
$data = $_POST['data'];
$oprt = $_POST['opr'];
$result=$_POST['rem'];
$prev_oprt=$_POST['pre_o'];
$sum=$result;
if($prev_oprt=="+"){
	$sum+=number_format($data);
	//array_splice($oprt, $i, 1);
	//array_splice($data, 0, 2);
	//$data=[];
}else if($prev_oprt=="-"){
	$sum-=number_format($data);
	//array_splice($oprt, $i, 1);
	//array_splice($data, 0, 2);
}else if($prev_oprt=="*"){
	$sum*=number_format($data);
	//array_splice($oprt, $i, 1);
	//array_splice($data, 0, 2);
}else if($prev_oprt=="/"){
	$sum/=number_format($data);
	//array_splice($oprt, $i, 1);
	//array_splice($data, 0, 2);
}
echo(json_encode($sum));
?>