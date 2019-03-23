<html>
	<head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    alert();
    
      $('#submit').click(function(){
       
       var form = $('form')[0];
       var formData = new FormData(form);
       alert(formData);

        $.ajax({
        type: "POST",
        url: "insert.php",
        cache:false,
        contentType:false,
        processData:false,
        data:formData,
        //
        success:function(data)
        {
            alert(data);
           
            $.ajax({
            type: "POST",
            url: "list.php",
            cache:false,
            contentType:false,
            processData:false,
            data:formData,  
        success:function(data)
        {
            $('#view').html(data);
            //alert(data);
        },
        
        });

        }

    });
            return false;

    });

       $('#update').click(function(){
       alert("update start");
       
       var form = $('form')[0];
       var formData = new FormData(form);
       alert(formData);

        $.ajax({
        type: "POST",
        url: "edit.php",
        cache:false,
        contentType:false,
        processData:false,
        data:formData,
        //
        success:function(data)
        {
            alert(data);
           
            $.ajax({
            type: "POST",
            url: "list.php",
            cache:false,
            contentType:false,
            processData:false,
            
            data:formData,  
        success:function(data)
        {
            $('#view').html(data);
            //alert(data);
        },
        
        });

        }

    });
            return false;

    });


});
</script>

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
</head>
<body>
    <form id="myform" method="post" name="form">
        <table border="">
            <tr>
                <td>id</td>
               <td><input type="text" name="userid" id="userid" hidden="" ></td>
            </tr>
                <tr>
                    <td>fname</td>
                    <td><input type="text" name="fname" id="fname"></td>
                </tr>
                <tr>
                    <td>lname</td>
                    <td><input type="text" name="lname" id="lname"></td>
                </tr>
                <tr>
                    <td>gender</td>
                    <td><input type="radio" name="gender" value="male" id="gen">male
                    <input type="radio" name="gender" value="female" id="gen">femalee</td>
                </tr>
                
                <tr>
                    <td>Education</td>
                    <td><select name="education" id="education">

                        <option value="" id="NULL" >select</option>
                        <option value="B.E" id="B.E">B.E</option>
                        <option value="B.Sc" id="B.Sc">B.Sc</option>
                        <option value="B.C.A" id="B.C.A">B.C.A</option>

                    </select></td>
                </tr>
                <!-- <tr>
        <td>Hobbies</td>
        <td><input type="checkbox" name="hobbies[]" value="Playing">Playing<br>
             <input type="checkbox" name="hobbies[]" value="Reading">Reading<br>
             <input type="checkbox" name="hobbies[]" value="Dancing">Dancing<br>
             <input type="checkbox" name="hobbies[]" value="Singing">Singing<br>
             </td> 

        </tr>
        <tr>
        <td>Upload image</td>
        <td><input type="file" name="fileToUpload" id="fileToUpload">
        </td>
        </tr> 
         -->
                <tr>
    
                    <td><input type="submit" id="submit" name="submit" value="submit" ></td>
                    <td>   <input type="submit" id="update" name="submit" value="update" >
                    </td>
                </tr>
            </table>

    </form>
<div id="view"></div>
</body>
</html>



