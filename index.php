<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  
  
</head>
<body>
<div class="container">
<form class="form-horizontal">
<fieldset>
<div class="container">
<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Full name</label>  
  <div class="col-md-10">
  <input id="Name" name="Name" type="text" placeholder="Full name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Father">Father Name</label>  
  <div class="col-md-10">
  <input id="Father" name="Father" type="text" placeholder="Father Name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Mother">Mother Name</label>  
  <div class="col-md-10">
  <input id="Mother" name="Mother" type="text" placeholder="Mother Name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="dob">Date of Birth</label>  
  <div class="col-md-10">
  <input id="dob" name="dob" type="date" placeholder="Date of Birth" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mobile">Mobile Number</label>  
  <div class="col-md-10">
  <input id="mobile" name="mobile" type="text" placeholder="Mobile Number" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email ID</label>  
  <div class="col-md-10">
  <input id="email" name="email" type="text" placeholder="Email ID" class="form-control input-md">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Gender">Gender</label>
  <div class="col-md-10">
    <select id="Gender" name="Gender" class="form-control">
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Transgender">Transgender</option>
    </select>
  </div>
</div>

<div class="row">
    <div class="col"></div>
    <div class="col">Personal Information Page</div>
    <div class="col"> <button id="button2id" name="button2id" class="btn btn-danger">Next Page</button></div>
    
  </div>

<div>
</fieldset>
</form>

</body>
</html>
