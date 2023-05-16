<?php require "includes/header.php"?>

    
  <body>
    <h1 class="text-center">Registration site for IT students!</h1>

    
 
    
    <form class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-12 mb-3">
      <label for="validationTooltip01">First name</label>
      <input type="text" class="form-control" id="validationTooltip01" value="" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    
    <br>
    <br>

    <div class="col-md-12 mb-3">
      <label for="validationTooltip02">Last name</label>
      <input type="text" class="form-control" id="validationTooltip02" value="" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
  </div>
 
    <div class="col-md-3 mb-3">
      <label for="validationTooltip04">specialty</label>
      <select class="custom-select" id="validationTooltip04" required>
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
      <label for="validationTooltip05">email address</label>
      <input type="text" class="form-control" id="validationTooltip05" required>
      <div class="invalid-tooltip">
</div>
<br>


<label for="validationTooltip05">Date</label>
<input type="text" id="datepicker">

<div class="col-md-5 mb-5">
      <label for="validationTooltip05">contact number</label>
      <input type="text" class="form-control" id="validationTooltip05" required>
      <div class="invalid-tooltip">
</div>
</div>  
          </div>  
    </div>
</div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>

<?php require_once 'includes/footer.php'?>