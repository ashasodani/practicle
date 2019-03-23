<html>
  <head>
    <title>Listing</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
    
    $(document).ready(function()
    {
      $('.delete').click(function(e){
        
        
          var did= $(this).attr('id');
              $.ajax({
               // alert(did);
                type: "GET",
                url: "delete.php",
                data: { did },
                success: function(data){
                     alert("delete successfully!");
                    $.ajax({
                            type: "POST",
                            url: "list.php",
          
                            success: function(data){
                                //alert(data);
                                $('#view').html(data);
                            },
                  });
                
                },
            });
           return false;
       });


        $('.update').click(function(e){
      
        
          var edit_id= $(this).attr('id');
          alert(edit_id);
              $.ajax({
               // alert(did);
                type: "POST",
                url: "update.php",
                data: { edit_id },
                success: function(data){
                   alert(data)

                       var decode_data = jQuery.parseJSON(data);

                      $('#userid').val(decode_data.id);
                      $('#fname').val(decode_data.fname);
                      $('#lname').val(decode_data.lname);
                      if(decode_data.gender == 'male')
                {
                  $('input:radio[name=gen]')[0].checked=true;
                }
                else
                {
                  $('input:radio[name=gen]')[1].checked=true;
                }

                var arr = new Array();
                var arr =decode_data.education.split(',');
                if($.inArray("NULL",arr) !== -1)
                {
                  $("#NULL").prop('selected',true);
                }
                else
                {
                  $("#NULL").prop('selected',false);
                }

                if($.inArray("B.E",arr) !== -1)
                {
                  $("#B.E").prop('selected',true);
                }
                else
                {
                  $("#B.E").prop('selected',false);
                }
                if($.inArray("B.Sc",arr) !== -1)
                {
                  $("#B.Sc").prop('selected',true);
                }
                else
                {
                  $("#B.Sc").prop('selected',false);
                }
                if($.inArray("B.C.A",arr) !== -1)
                {
                  $("#B.C.A").prop('selected',true);
                }
                else
                {
                  $("#B.C.A").prop('selected',false);
                }

                      



                    $.ajax({
                            type: "POST",
                            url: "list.php",
                            success: function(data){
                                //alert(data);
                                $('#view').html(data);
                            },
                  });
                
                },
            });
           return false;
       });

    });

   
    </script>
  </head>
    <body>
      <center>
      <h1>Display</h1>
      <table border="2" cellpadding="5" cellspacing="0">
          <tr>
            <td>Id</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Gender</td>
            <td>Education</td>
            <!-- <td>Hobby</td>
            <td>Profile</td>
            <td>Gallory</td>
             --><td>Edit</td>
            <td>Delete</td>

          </tr>
          <?php 
            $con= New Mysqli("localhost","root","","a_asha");
            include 'control.php';
            
            $v = new control();
            $s =$v->list1();

            while($fet=$s->fetch_object())
              
            {
              //$gal=explode("," , $fet->image_name);
          ?>
          <tr>
            <td><?php echo $fet->id; ?></td>
            <td><?php echo $fet->fname; ?></td>
            <td><?php echo $fet->lname; ?></td>
            <td><?php echo $fet->gender; ?></td>
            <td><?php echo $fet->education; ?></td>
            <!-- <td><?php //echo $fet->hob; ?></td>
            <td><img src="../images/<?php //echo $fet->img_name; ?>" width="50" heithg="50"></td>
          
            <td>
            <?php
                //for($i=0; $i<count($gal); $i++)
                {
             ?>
              <img src="../images/<?php //echo $gal[$i]; ?>" height="50px" width="50px">
 -->
            <?php 
                }
            ?>
          </td>
          <td><a href="#" id="<?php echo $fet->id; ?>" class="update">Edit</a></td>
        <td><a href="#" id="<?php echo $fet->id; ?>" class="delete">Delete</a></td>
          </tr>
        
          <?php
            
            }
          ?>
          
      </table>
    </center>
    <div id="view"></div>
  </body>
</html>