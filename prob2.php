<?php
error_reporting(0);
    $vadpav=$_POST['vadpav'];
    $vadpavprice=$_POST['vadpavprice'];
    $samosa=$_POST['samosa'];
    $samosaprice=$_POST['samosaprice'];
    $bread=$_POST['bread'];
  
    $orderbread = floor($bread / 2);
 
   if($samosaprice > $vadpavprice) {
    $samosa1 = 0;  
    for($num= 1; $num <= $samosa ; $num++){
        $orderbread = $orderbread - 1; 
        $samosa1 = $samosa1 + 1;
       if($orderbread == 0){
       break;
       }
    }
    if($orderbread > 0) {
        $vadapav = 0;
        for($vada=1; $vada <= $vadpav; $vada++){
             $vadapav = $vadapav + 1;
            if($orderbread == 0){
            break;
            }
        }
    }

    }
else {
    $vadapav = 0;  
    for($vada= 1; $vada <= $vadpav ; $vada++){
        $orderbread = $orderbread - 1; 
        $vadapav = $vadapav + 1;
       if($orderbread == 0){

       break;
       }
    }
    if($orderbread > 0) {
        $samosa1 = 0;
        for($num=1; $num <= $samosa; $num++){
            $samosa1 = $samosa1 + 1;
            if($orderbread == 0){
            break;
            }
        }
    }

}
$profit = ($samosa1 * $samosaprice) + ($vadapav * $vadpavprice);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Problem Statement 2</title>
</head>

<body>

    <div class="container">

        <div>
            <h3 class="m-4 d-flex justify-content-center">Problem Statement 2</h3>
            <div class="border">
                <form class="p-4" method="post">
                 
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="vadpav">Vadapav</label>
                                <input type="number" class="form-control" id="vadpav" name="vadpav">
                            </div>
                            <div class="col">
                                <label for="vadpavprice">Price</label>
                                <input type="number" class="form-control" id="vadpavprice" name="vadpavprice">

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="samosa">Samosa</label>
                                <input type="number" class="form-control" id="samosa" name="samosa">
                            </div>
                            <div class="col">
                                <label for="samosaprice">Price</label>
                                <input type="number" class="form-control" id="samosaprice" name="samosaprice">

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="bread">Breads</label>
                                <input type="number" class="form-control" id="bread" name="bread">
                            </div>
                            <div class="col">
                                <label for="breadprice">Price</label>
                                <input type="number" class="form-control" id="breadprice" disabled>
                            </div>
                        </div>
                    </div>
                    <center>
                        <button type="submit" class="btn btn-info btn-lg" value="submit">Submit</button>
                    </center>
                </form>
            </div>
            <br>
            <div class="border">
                <label for="" class="m-4 d-flex justify-content-center">Maxmimum Possible Profit Possible is</label>
                <h3 class="m-4 d-flex justify-content-center"><?php echo $profit; ?></h3>
            </div>
        </div>
    </div>


<!-- Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
    $("form").on("submit", function(){
 
        var vadpav = $('#vadpav').val();
        var vadpavprice = $('#vadpavprice').val();
        var samosa = $('#samosa').val();
        var samosaprice = $('#samosaprice').val();
        var bread = $('#bread').val();
    
     
     $.ajax({
      type: 'post',
      data:  {
		 vadpav:vadpav, vadpavprice:vadpavprice, samosa:samosa, samosaprice:samosaprice, bread:bread
	},
     });
    });
  
  });
  </script>
</body>

</html>
