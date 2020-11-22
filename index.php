<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<link rel="stylesheet" type="text/css" href="demo.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<div>
		<div id="cal">
			<input type="text" value="" id="result"/><br> 
			<input type="button" value="1"  id="b1"/>
			<input type="button" value="2" id="b2"/> 
			<input type="button" value="3" id="b3"/> <br>
			<input type="button" value="4"  id="b4"/> 
			<input type="button" value="5" id="b5"/> 
			<input type="button" value="6"  id="b6"/>  <br>
			<input type="button" value="7"  id="b7"/> 
			<input type="button" value="8"  id="b8"/> 
			<input type="button" value="9"  id="b9"/>  <br>
			<input type="button" value="0"  id="b10"/>  
			<input type="button" value="+"  id="sum" /> 
			<input type="button" value="-"  id="sub" /> <br>
			<input type="button" value="*"  id="mul" /> 
			<input type="button" value="/"  id="div" />  
			<input type="button" value="="  id="eql" /> 
		</div>
	</div>
	<script>
		
		 $(document).ready(function(){
			var text="";
			var opr="+";
			var sum=0;
				$('input[type="button"]').click(function(){
					if($.isNumeric($(this).val())){
						text+=$(this).val();
						$('#result').val(text);
						data=$('#result').val();
					}else{
						console.log("Operator clicked");
						$('#result').val("");
						text="";
						oprt=$(this).val();
						$.ajax({
							url:"process.php",
							type:"POST",
							dataType:'json',
							data:{data:data,opr:oprt,rem:sum,pre_o:opr},
							success:function(result){
								sum=result;
								$("#result").val(result);
								opr=oprt;
							}
						})
					}
					/*if(opr.length>=1){
						var o = JSON.stringify(opr);
						opr.push($(this).val());
						$.ajax({
							url:"process.php",
							type:"POST",
							dataType:'json',
							data:{data:arr,opr:o,rem:sum},
							success:function(result){
								sum=result;
								console.log(sum);
							}
						})

					}else{
						opr.push($(this).val());
					}
				});
				/*$('#sub').click(function(){
					final.push(arr.pop());
					arr=[];
					if(opr.length>=1){
						var str = JSON.stringify(final);
						var o = JSON.stringify(opr);
						opr.push($(this).val());
						$.ajax({
							url:"process.php",
							type:"POST",
							dataType:'json',
							data:{data:str,opr:o},
							success:function(result){
								console.log(result);
							}
						})
					}else{
						opr.push($(this).val());
					}
				});
				$('#mul').click(function(){
					final.push(arr.pop());
					arr=[];
					if(opr.length>=1){
						var str = JSON.stringify(final);
						var o = JSON.stringify(opr);
						opr.push($(this).val());
						$.ajax({
							url:"process.php",
							type:"POST",
							dataType:'json',
							data:{data:str,opr:o},
							success:function(result){
								console.log(result);
							}
						})
					}else{
						opr.push($(this).val());
					}
				});
				$('#div').click(function(){
					final.push(arr.pop());
					arr=[];
					if(opr.length>=1){
						var str = JSON.stringify(final);
						var o = JSON.stringify(opr);
						opr.push($(this).val());
						$.ajax({
							url:"process.php",
							type:"POST",
							dataType:'json',
							data:{data:str,opr:o},
							success:function(result){
								mycall(result);
							}
						})
					}else{
						opr.push($(this).val());
					}*/
				});

			})
	</script>
</body>
</html>
