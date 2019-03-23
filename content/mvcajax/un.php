 $(function(){
        $('#update').show();
        $('#submit').hide();
          $('.update').click(function(e){
            //e.preventDefault();
            var edit_id=$(this).attr('id');
            //alert('ghgjh');

            $.ajax({

              type:"GET",
              url:'update.php',
              data:{edit_id},
              success:function(data)
              {
                alert(data);
                //alert(eid);
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
                var arr =decode_data.edu.split(',');
                if($.inArray("",arr) !== -1)
                {
                  $("").prop('selected',true);
                }
                else
                {
                  $("").prop('selected',false);
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

                /*var arr1 = new Array();
                var arr1 =decode_data.hob.split(',');

                if($.inArray("movies",arr1) !== -1)
                {
                  $("#movies").prop('checked',true);
                }
                else
                {
                  $("#movies").prop('checked',false);
                }
                if($.inArray("music",arr1) !== -1)
                {
                  $("#music").prop('checked',true);
                }
                else
                {
                  $("#music").prop('checked',false);
                }
                if($.inArray("watching",arr1) !== -1)
                {
                  $("#watching").prop('checked',true);
                }
                else
                {
                  $("#watching").prop('checked',false);
                }

                $('#img_name').html('<img width="50" height="50" src="../images/'  + decode_data.img_name +'"/>');
                
                var img_array=decode_data.image_name.split(',');
                $('#image_name').empty();
                  for(i=0; i<img_array.length;i++)
                  {
                    $('#image_name').append('<img width="50" height="50" src="../images/'  + img_array[i] +'"/>');
                  }
                */
                    
            }
          });
        }); 
      });
      
      