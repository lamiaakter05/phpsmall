<?php
 $number3 = null;

if(isset($_POST['submit'])){
  
     $number1 = $_POST['first_number'];
     $number2 = $_POST['second_number'];

     $number3 = $number1 + $number2;
     

}else{

}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP small project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
     
     <div class="container">
     <div class="row">
       <div class="col-lg-10">
         <!--form--> 
             <form action="<<?php echo $_SERVER['PHP_SELF'];?>" method="post">
              <div class="mb-3 mt-3">
                <label for="first_number" class="form-label">1st number</label>
               <input type="number" class="form-control first_number" id="first_number" name="" placeholder="enter your 1st number" required>
                  </div>

                  <div class="mb-3">
                <label for="second_number" class="form-label">2nd number</label>
               <input type="number" class="form-control second_number" id="second_number" name="" placeholder="enter your 2nd number" required>
                  </div>

              
              
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
           

         <!--form-->

       </div>
     </div>

  </div>
  <div class="container">
    <h2 class="text-dark">
    <?php echo number3; ?>
    </h2>
  </div>
  




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>