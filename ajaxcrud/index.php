<!DOCTYPE html>
<html>
<head>
	<title>REGISTER</title>
	<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		//alert('ready page');
		$("#submit").click(function(e){
			//alert('welcome');
			e.preventDefault();
			var form = $('form')[0];
			var formData = new FormData(form);

			$.ajax({
				type:"POST",
				url:"insert.php",
				cache:false,
				contentType:false,
				processData:false,
				data:formData,

				success:function(data){
					//$("#show").html(data);
					$.ajax({
						type:"POST",
						url:"view.php",
						cache:false,
						contentType:false,
						processData:false,
						data:formData,

						success:function(data){
							$("#show").html(data);
						}						
					});
				}

			});
				//return false;
				//$("#myform")[0].reset;
				$("#myform")[0].reset();
		});
		$("#update").click(function(e){
			
			$("#submit").show();
			$("#update").hide();
			e.preventDefault();
			var form=$('form')[0];
			var formData=new FormData(form);

			$.ajax({
				type:"POST",
				url:"edit.php",
				cache:false,
				contentType:false,
				processData:false,
				data:formData,
				success:function(data){
					alert(data);
					$.ajax({
						type:"POST",
						url:"view.php",

						success:function(data){
							$("#show").html(data);
						}
					});
				}

			});
			$("#myform")[0].reset();
		});
	});
	</script>
</head>
<body>
<center>
<h1>Register</h1>
	<form method="post" id="myform" enctype="multipart/form-data">
		<table border="1">
		<tr>
			<td><input type="text" name="id" id="id" hidden=""></td>
		</tr>
			<tr>
				<th>Name:</th>
				<td><input type="text" name="name" id="name"></td>
			</tr>
			<tr>
				<th>Address:</th>
				<td><textarea name="address" id="address" cols="22" rows="3"></textarea></td>
			</tr>
			<tr>
				<th>Gender:</th>
				<td>
					<input type="radio" name="gender" id="gender" value="male">Male
					<input type="radio" name="gender" id="gender" value="female">Female
				</td>
			</tr>
			<tr>
				<th>Education:</th>
				<td>
					<select name="education">
						<option value="" id="NULL"></option>
						<option value="bca" id="bca">BCA</option>
						<option value="mca" id="mca">MCA</option>
						<option value="bba" id="bba">BBA</option>
						<option value="mba" id="mba">MBA</option>
					</select>
				</td>
			</tr>
			<tr>
				<th>Hobby:</th>
				<td>
					<input type="checkbox" name="hobby[]" id="cricket" value="cricket">cricket
					<input type="checkbox" name="hobby[]" id="music" value="music">Music
					<input type="checkbox" name="hobby[]" id="driving" value="driving">Driving
				</td>
			</tr>
			<tr>
				<th>Profile:</th>
				<td>
				<div id="profile"></div>
				<input type="file" name="profile" id="profile">
				<input type="hidden" name="profile1" id="profile1">	
				</td>
			</tr>
			<tr>
				<th>Gallary:</th>
				<td>
					<div id="gallary" ></div>
					<input type="file" name="gallary[]" id="gallary" multiple="">
					<input type="hidden" name="gallary1" id="gallary1">
				</td>
			</tr>
			<tr></tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" id="submit" value="submit">
					<input type="submit" name="update" id="update" hidden="">
				</td>
			</tr>
		</table>
	</form>
	
</center>
<div id="show">
		
	</div>
</body>
</html>