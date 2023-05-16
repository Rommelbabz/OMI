<?php require "includes/header.php" ?>



    
  <body>
    <h1 class="text-center">Registration site for IT students!</h1>

    
 

    <form method="get" action ="success.php">

    


  <div class="form group">
             <label for="firstname">First name</label>
             <input required type="text" class="form-control" id= "firstname" name="firstname">
</div>

<div class="form group">
             <label for="lastname">Last name</label>
             <input required type="text" class="form-control" id= "lastname" name="lastname">
</div>


 
    <div class="col-md-3 mb-3">
      <label for="specialty">specialty</label>
      <select class="custom-select" id="specialty" name="specialty" required>
        <option selected disabled value="">Choose...</option>
        
        <option>database admin</option>
        <option>software developer</option>
        <option>web administration</option>
      </select>
      <div class="invalid-tooltip">
        Please select a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="address">email address</label>
      <input type="text" class="form-control" id="address" name="address" required>
      <div class="invalid-tooltip">
</div>
<br>


<label for="validationTooltip05">Date</label>
<input type="text" id="datepicker" name="datepicker">

<div class="col-md-5 mb-5">
      <label for="number">contact number</label>
      <input type="text" class="form-control" id="number" name="number" required>
      <div class="invalid-tooltip">
</div>
</div>  
          </div>  
    </div>
</div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit</button>
</form>

<?php require_once 'includes/footer.php'?>