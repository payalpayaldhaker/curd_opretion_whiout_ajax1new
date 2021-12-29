<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>query </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style> 
     /*  form{ 
        background-color: red;
      } */
  </style>

  </head>
<body>
        <?php  
            if(isset($_GET['submitbtn'])){ 
              // echo 'yess';

                //filter and senitize incoming data

             


             //1.db conection open 
             $conn =mysqli_connect('localhost','root','','coatching1_db');

                
            
             $name = mysqli_real_escape_string($conn,$_GET['name']);
             $course = mysqli_real_escape_string($conn,$_GET['course']);


            //2.build the query 
                $sql = "INSERT INTO students_tbl(`name`,`course`)VALUES('$name','$course') ";
            //3.exicute the query
                mysqli_query($conn,$sql);
            //4.display the result
                echo 'okokok';
             //5.db conection close
                mysqli_close($conn);
            }
            else{ 
                //echo 'false';
            }
        
        
        ?>

<form class="w-50 offset-3" action="<?php  echo $_SERVER['PHP_SELF']?>" method="POST">
            <h1 class="text-center">Resistration form</h1>
<div class="mb-3">
    <label for="name" class="form-label">name</label>
    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="course" class="form-label">course</label>
    <input type="text" name="course" class="form-control" id="course">
  </div>
  
  <button type="submit" name="submitbtn" class="btn btn-primary">Submit</button>
</form> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>