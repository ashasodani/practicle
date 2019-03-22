<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
alert("hello");
$(document).ready(function(){
$("#username").keyup(function(){


  
  var username=$("#username").val();
  alert(username);
  $.ajax({
    type:'POST',
    url:'checkdata.php',
    data:{'username':username,
    },
    success:function(response){
      $('#name_status').html(response);
      if(response=='OK')
      {
        return true;
      }
      else
      {
        return false;
      }
    }
  });
});
$("#useremail").keyup(function(){


  
  var useremail=$("#useremail").val();
  //alert(username);
  $.ajax({
    type:'POST',
    url:'checkdata.php',
    data:{'useremail':useremail,
    },
    success:function(response){
      $('#email_status').html(response);
      if(response=='OK')
      {
        return true;
      }
      else
      {
        return false;
      }
    }
  });
});
$("#submit").click(function(){

var namehtml=document.getElementById("name_status").innerHTML;
 var emailhtml=document.getElementById("email_status").innerHTML;

 if((namehtml && emailhtml)=="OK")
 {
  return true;
 }
 else
 {
  return false;
 }

  
  
});

});

/*function checkname()
{
 var name=document.getElementById( "u_name" ).value;
	
 if(name)
 {
  $.ajax({
  type: 'post',
  url: 'checkdata.php',
  data: {
   u_name:name,
  },
  success: function (response) {
   $( '#name_status' ).html(response);
   if(response=="OK")	
   {
    return true;	
   }
   else
   {
    return false;	
   }
  }
  });
 }
 else
 {
  $( '#name_status' ).html("");
  return false;
 }
}

function checkemail()
{
 var email=document.getElementById( "u_email" ).value;
	
 if(email)
 {
  $.ajax({
  type: 'post',
  url: 'checkdata.php',
  data: {
   user_email:email,
  },
  success: function (response) {
   $( '#email_status' ).html(response);
   if(response=="OK")	
   {
    return true;	
   }
   else
   {
    return false;	
   }
  }
  });
 }
 else
 {
  $( '#email_status' ).html("");
  return false;
 }
}

/*function checkall()
{
 var namehtml=document.getElementById("name_status").innerHTML;
 var emailhtml=document.getElementById("email_status").innerHTML;

 if((namehtml && emailhtml)=="OK")
 {
  return true;
 }
 else
 {
  return false;
 }
}
*/
</script>
</head>
<body>
		

 <form method="POST" action="insertdata.php" name="userform" onsubmit="checkall();">
 <table>
   <tr>
   <td>name</td>
   <td><input type="text" name="username" id="username" >
<span id="name_status"></span>
   </td>
   </tr>
   <tr>
   <td>email</td>
   <td><input type="text" name="useremail" id="useremail" >
<span id="email_status"></span>
   </td>
   </tr>
   <tr>
   <td>password</td>
   <td><input type="text" name="userpass" id="u_pass"></td>
   </tr>
   <tr>
   <td>submit</td>
   <td><input type="submit" name="submit" ></td>
   </tr>
 </table>
 </form>
</body>
</html>
