<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />

        <title>Simple - Form</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    </head>

    <body>

     <?php

       $process1 = '<script type="text/javascript"> alert("MYSQL Database Connecting . . .") </script> ';

       $process2 = '<script type="text/javascript"> alert("Database Connected Successfully . . ! !") </script> ';

       $connect = mysqli_connect("localhost","root");

       if ($connect) { echo "$process1"."<br>"; };

       $database = mysqli_select_db($connect,"formdb");

       if($database) { echo "$process2"; };

     ?>
      
      <h1 class="text-center text-warning  m-5"><em><u>Simple Form</u></em></h1>

      <h6 class="text-center  m-5">By Using ⇒ PHP - MSQL - AJAX</h6>

      <div class="container col-lg-4 m-auto">

        <form id="form" action="insert_data.php" method="POST">

          <label> <strong>Your Name:</strong> </label>
          
          <input type="text" class="form-control" name="Names" required>

          <br/>

          <strong>Email:</strong> <input type="text" class="form-control" name="Emails" required>

          <br/>

          <label> <strong>Degree:</strong> </label>
            
          <select name="Degree" class="form-control btn btn-outline-secondary mt-3 mb-3" onchange="fun(this.value)">

            <option> Select Any One </option>

            <?php

           $query = "select * from degree";
           
           $result = mysqli_query($connect,$query);
           
           while ($rows = mysqli_fetch_array($result)) {
           
             ?>
             
             <option value = " <?php echo $rows["main_id"]; ?> "> <?php echo $rows["degrees"]; ?> </option>
            
             <?php                
           }
            
            ?>

          </select>

          <br/>

          <label> <strong>Subject:</strong> </label>

          <select name="Subject" class="form-control btn btn-outline-secondary mt-3 mb-3" id="target">

            <option> Choose Any One </option>

          </select>

          <br/>
          
          <div class="d-flex mt-3 justify-content-center">  
          
           <input type="submit" name="submit" value="Submit" id="submit" class="btn btn-primary mb-5">
          
          </div>
        
        </form>

      </div>
      
      <script>

       function fun(value) {
         
        $.ajax( {
        
          url: 'subject.php',
        
          type: 'POST',
        
          data: { datapost : value },
        
          success : function(result) {
        
            $('#target').html(result);
        
          }
        
        } );
       
      };

       $(document).ready(function(){

         var form = $('#form');

         $('#submit').click(function(){

          $.ajax({

            url: form.attr('action'),

            type: 'POST',

            data: $('#form input').serialize(),

            success: function(data){console.log(data);}

          });

         });

        });

      </script>

    </body>

</html>