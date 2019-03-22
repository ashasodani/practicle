<!DOCTYPE html>
<html>
<head>
	<title>View</title>
		<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				//alert('kaja');
				$(".delete").click(function(e){
					//e.preventDefault();
					var id=$(this).attr('id');
					//alert(id);
					$.ajax({
						type:"GET",
						url:"delete.php",
						data:{id},
						success:function(data){
							alert(data);
							$.ajax({
								url:"view.php",
								type:"post",
								success:function(data){
									$("#show").html(data);
								}
							});
						}
					});
				});
			$(".update").click(function(e){
				$("#update").show();
				$("#submit").hide();
				var id=$(this).attr('id');
				//alert(id);
				$.ajax({
					type:"GET",
					url:"update.php",
					data:{id},
					success:function(data){
						var decode_data=jQuery.parseJSON(data);
									$("#id").val(decode_data.id);
									$("#name").val(decode_data.name);
									$("#address").val(decode_data.address);
									$("#profile1").val(decode_data.profile);
									$("#gallary1").val(decode_data.gallary);
									if(decode_data.gender == 'male')
									{
										$('input:radio[name=gender]')[0].checked=true;
									}
									else if(decode_data.gender == 'female')
									{
										$('input:radio[name=gender]')[1].checked=true;
									}

									var edu = new Array();
									var edu = decode_data.education.split(',');
									if($.inArray('NULL',edu) !== -1)
									{
										$("#NULL").prop('selected',true);
									}
									else
									{
										$("#NULL").prop('selected',false);	
									}
									if($.inArray('bca',edu) !== -1)
									{
										$("#bca").prop('selected',true);
									}
									else
									{
										$("#bca").prop('selected',false);	
									}
									if($.inArray('mca',edu) !== -1)
									{
										$("#mca").prop('selected',true);
									}
									else
									{
										$("#mca").prop('selected',false);	
									}
									if($.inArray('bba',edu) !== -1)
									{
										$("#bba").prop('selected',true);
									}
									else
									{
										$("#bba").prop('selected',false);	
									}if($.inArray('mba',edu) !== -1)
									{
										$("#mba").prop('selected',true);
									}
									else
									{
										$("#mba").prop('selected',false);	
									}

									var hby=new Array();
									var hby=decode_data.hobby.split(',');
									if($.inArray('cricket',hby) !== -1)
									{
										$("#cricket").prop('checked',true);
									}
									else
									{
										$("#cricket").prop('checked',false);	
									}
									if($.inArray('music',hby) !== -1)
									{
										$("#music").prop('checked',true);
									}
									else
									{
										$("#music").prop('checked',false);	
									}
									if($.inArray('driving',hby) !== -1)
									{
										$("#driving").prop('checked',true);
									}
									else
									{
										$("#driving").prop('checked',false);	
									}

									$("#profile").html('<img src="img/'+decode_data.profile+'" height="20px" width="20px">');

									/*var gal=decode_data.gallary.split(',');
									$("#gallary").empty();
									for($i=0;$i<gal.lenght;$i++)
									{
										$("#gallary").append('<img src="img/'+gal[$i]+'" height="20px" width="20px">')
									}*/
									var img_array=decode_data.gallary.split(',');
								$('#gallary').empty();
									for(i=0; i<img_array.length;i++)
									{
										$('#gallary').append('<img width="50" height="50" src="img/'  + img_array[i] +'"/>');
									}
									alert(decode_data);
									alert(data);
					}
				});
			});

			});
		</script>
</head>
<body>
<center>
<h1>Record</h1>
	<table>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Address</th>
			<th>Gender</th>
			<th>Education</th>
			<th>Hobby</th>
			<th>Profile</th>
			<th>Gallary</th>
			<th colspan="2">Action</th>
		</tr>
		<?php
			include_once "connect.php";
			$q=mysqli_query($con,"select * from regi");
			while($data=mysqli_fetch_assoc($q))
			{
		?>
		<tr>
			<td><?php echo $data['id'];?></td>
			<td><?php echo $data['name'];?></td>
			<td><?php echo $data['address'];?></td>
			<td><?php echo $data['gender'];?></td>
			<td><?php echo $data['education'];?></td>
			<td><?php echo $data['hobby'];?></td>
			<td><img src="img/<?php echo $data['profile'];?>" width="30px" height="30px"></td>
			<td>
					<?php
						$img=$data['gallary'];
						$img2=explode(',',$img);
						for($i=0;$i<count($img2);$i++)
						{
					?>
				<img src="img/<?php echo $img2[$i];?>" width="30px" height="30px">
				<?php } ?>
			</td>
			<td>
				<button id="<?php echo $data['id'];?>" class="delete">Delete</button>
			</td>
			<td>
				<button id="<?php echo $data['id'];?>" class="update">Update</button>
			</td>
		</tr>
		<?php } ?>
	</table>
</center>
</body>
</html>