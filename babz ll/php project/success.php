
<?php

$title='success';
require_once 'includes/header.php';
require_once 'db/conn.php';

if(isset($POST['submit'])){




   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $datepicker = $_POST['datepicker'];
   $specialty = $_POST['specialty'];
   $address = $_POST['address'];
   $number = $_POST['number'];

   $isSuccess = $crud->insert($firstname, $lastname, $specialty, $address, $datepicker, $number);

   if($isSuccess){
    echo'<class="text-center text-success"> You Have Been Registered!</h1>';
   }
   else{
    echo'<class="text-center text-danger"> There was an error in processing!</h1>';
   }
  }
  ?>

  <h1 class="text-center">You Have Been Registered</h1>

   

<div class="card" style="width: 18rem;">
<img src="img/logo.jpg" class="card-img-top"alt="">
  <div class="card-body">
    <h5 class="card-title"> <?php echo $_GET['firstname'].' '.$_GET['lastname'];?>
</h5>
<p class="card-text">
specialty: <?php echo $_GET['specialty'];?>
</p>
<p class="card-text">
email address: <?php echo $_GET['address'];?>
</p>
<p class="card-text">
date of birth: <?php echo $_GET['datepicker'];?>
</p>
<p class="card-text">
contact number: <?php echo $_GET['number'];?>
</p>
    
  </div>
</div>
<br>
<br>
<?php require_once 'includes/footer.php';
?>