    $(document).ready(function(){
    
    
    
    $("#boton").click(function(){
        
          var cell_no = $("#cell_no").val();
         var course_name =  $("#course_name").val();
         var dept_name = $("#dept_name").val();
         var fname = $("#fname").val();
         var lname = $("#lname").val();
         var password = $("#password").val();
         var type_name = $("#type_name").val();
         var username = $("#username").val();

        $.ajax({
            type : "POST",
            url : "include/js/insert.php",
            data : 
            {
                 'done':1,
               'cell_no': cell_no,
                'course_name':course_name,
               'dept_name':dept_name,
                'fname':fname,
               'lname':lname,
                'password':password,
              'type_name':  type_name,
               'username': username
            },
            success: function(datas){
                alert(datas);
                alert("fdfdf");
               
            }
        });
    });
    


    });
    
