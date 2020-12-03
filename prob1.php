<?php
    $minute=$_POST['minute'];
    $nofserver=$_POST['nofserver'];
  
    for($num = 0; $num <= 4; $num++) {
   
        if($minute[$num] < 50){
            $server = $nofserver / 2;
        }
        else{
            $server = 2 * $nofserver + 1;
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Problem Statement 1</title>
</head>

<body>
    <div class="container">
        <div>
            <h3 class="m-4 d-flex justify-content-center">Problem Statement 1</h3>
            <div class="border">
                <form class="p-4" method="post">
                    <div class="form-group">
                        <label for="nofserver">Number of Server</label>
                        <input type="text" class="form-control" id="nofserver" name="nofserver">
                    </div>
                    <div class="form-group">
                        <label for="serverload">Server Load</label>
                        <div class="row">
                            <div class="col">
                                <input type="text" name="minute[]" id= "mt1" class="form-control" placeholder="1st Minute">
                            </div>
                            <div class="col">
                                <input type="text" name="minute[]" id= "mt2" class="form-control" placeholder="2nd Minute">
                            </div>
                            <div class="col">
                                <input type="text" name="minute[]" id= "mt3" class="form-control" placeholder="3rd Minute">
                            </div>
                            <div class="col">
                                <input type="text" name="minute[]" id= "mt4" class="form-control" placeholder="4th Minute">
                            </div>
                            <div class="col">
                                <input type="text" name="minute[]" id= "mt5" class="form-control" placeholder="5th Minute">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary" value="submit">Submit</button>
                </form>
            </div>
            <br>
            <div class="border">
                <div class="p-4 d-flex justify-content-center">
                    <label for="">Number of Server Running</label>
                    <div id='response'></div>
                </div>

                <div class="d-flex justify-content-center">
               
                <h3>  <?php echo $server; ?></h3>     
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>


<!-- Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
    $("form").on("submit", function(){
  var minute = [];
  var nofserver = $('#nofserver').val();
    $('.minute').keyup(function(){
     
     $.ajax({
      type: 'post',
      data:  {
			 minute:minute, nofserver:nofserver 
		 },
    
     });
    });
  });
  });
  </script>
</body>

</html>