 <html>
	<head>
	<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #000000;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding:20px;
}
</style>
<?php
$ferr=$lerr=$generr=$eduerr=$hoberr="";
$fname=$lname=$gender=$education=$hobbies="";
$f=0;
if(isset($_POST['submit']))
{
  if(empty($_POST['fname']))
  {
    $ferr="first name empty";
    $f=1;
  }
   
  else 
  {
    $fname=$_POST['fname'];
     if(!preg_match("/^[a-zA-Z ]+$/", $fname))
    {
      $ferr="only char allow";
      $f=1;
    }
  }
   if(empty($_POST['lname']))
  {
    $lerr="last name empty";
    $f=1;
  }
  else
  {
    $lname=$_POST['lname'];

  }
  if(empty($_POST['gender']))
  {
    $generr="gender name empty";
    $f=1;
  }
  else
  {
    $gender=$_POST['gender'];

  }
  if(empty($_POST['education']))
  {
    $eduerr="education name empty";
    $f=1;
  }
  else
  {
    $education=$_POST['education'];

  }
   if(empty($_POST['hobbies']))
  {
    $hoberr="hobbies empty";
    $f=1;
  }
  else
  {
    $hobbies=$_POST['hobbies'];

  }
  

}
if($f=0){
$con=mysqli_connect('localhost','root','','a_asha');
    echo $query="INSERT INTO `company`(`fname`, `lname`, `gender`, `education`, `hobbies`, `files`, `multiple_file`) VALUES ('$fname','$lname','$gender','$education','$h','$as','$i')";
    
    $var=mysqli_query($con,$query);
    header("location:display.php");
  }

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



<!-- client side -->
 <!-- <script>
$(document).ready(function(){
   alert();

   $('#submit').click(function(){
      var fname=$('#fname').val();
      var lname=$('#lname').val();
      var education=$('#education').val();
      var files=$('#fileToUpload').val();
      
      

      if(fname=='')
      {
        alert("please fill out first name");
        return false;
      }
      if(lname=='')
      {
        alert("please fill out last name");
        return false;
      }
         
      if(education=='NULL')
      {
         alert("please selet education");
        return false;
      }
      if(files='')
      {
        alert("please select image");
        return false;
      }
     
      
      
      else
      {
        return true;
      }
   })
});
</script> -->
 


		
		</head>
	<body>
		<form name='myform' method='POST' onsubmit="return validateForm()" enctype="multipart/form-data" >
			<table border="">
				<tr>
					<td>fname</td>
					<td><input type="text" name="fname" id="fname" value="">
              <span class="error">*<?php echo $ferr; ?></span>
          </td>
				</tr>
				<tr>
					<td>lname</td>
					<td><input type="text" name="lname" id="lname" value="">
               <span class="error">*<?php echo $lerr; ?></span>
          </td>
				</tr>
				<tr>
					<td>gender</td>
					<td><input type="radio" name="gender" value="male" >male
					<input type="radio" name="gender" value="female">femalee
          <span class="error">*<?php echo $generr; ?></span>
          </td>
				</tr>
				
			    <tr>
					<td>Education</td>
					<td><select name="education" id="education">

                        <option value="NULL">select</option>
	                    <option value="B.E">B.E</option>
						<option value="B.Sc">B.Sc</option>
						<option value="B.C.A">B.C.A</option>

					</select>
          <span class="error">*<?php echo $eduerr; ?></span></td>
				</tr>
        <tr>
        <td>Hobbies</td>
        <td><input type="checkbox" name="hobbies[]" value="Playing">Playing<br>
             <input type="checkbox" name="hobbies[]" value="Reading">Reading<br>
             <input type="checkbox" name="hobbies[]" value="Dancing">Dancing<br>
             <input type="checkbox" name="hobbies[]" value="Singing">Singing<br>
             <span class="error">*<?php echo $hoberr; ?></span>
             </td> 

        </tr>
        <tr>
        <td>Upload image</td>
        <td><input type="file" name="fileToUpload" id="fileToUpload">
        </td>
        </tr> 
        <tr>
        <td>Upload Multiple image</td>
        <td><input type="file" name="fileUpload[]" id="fileToUpload" multiple="">
        </td>
        </tr> 
        
				<tr>
	
					<td><input type="submit" id="submit" name="submit" value="submit" >
					</td>
				</tr>
			</table>
		</form>
		
	</body> 
</html>
  <?php
/*  if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $gender=$_POST['gender'];
    $education=$_POST['education'];
    $hobbies=$_POST['hobbies'];
    $h=implode(',',$hobbies);

    $as=$_FILES['fileToUpload']['name'];
    $tmp=$_FILES['fileToUpload']['tmp_name'];
    move_uploaded_file($tmp,"upload/".$as);

    $image=array();
    foreach (($_FILES['fileUpload']['tmp_name']) as $key => $tmp) {
      $sa=$_FILES['fileUpload']['name'][$key];
      $temp=$_FILES['fileUpload']['tmp_name'][$key];
      if(move_uploaded_file($temp,"upload/".$sa))
      {
        echo "sucess";
      }
      array_push($image,$sa);

    }
    
    $i=implode(',',$image);

    $con=mysqli_connect('localhost','root','','a_asha');
    echo $query="INSERT INTO `company`(`fname`, `lname`, `gender`, `education`, `hobbies`, `files`, `multiple_file`) VALUES ('$fname','$lname','$gender','$education','$h','$as','$i')";
    
    $var=mysqli_query($con,$query);
    header("location:display.php");

  }*/
?>  
		
