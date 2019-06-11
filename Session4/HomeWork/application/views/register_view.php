<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container"> 



<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">

<article class="card-body">
<form action="<?php  echo "register/insertData" ?> method="post" enctype="multipart/form-data">
  <div class="form-row">
    <div class="col form-group">
      <label>Name </label>   
        <input type="text" class="form-control" placeholder="Your name">
    </div> <!-- form-group end.// -->
    <div class="col form-group">
      <label>Phone</label>
        <input type="text" class="form-control" placeholder="Your phone number">
    </div> <!-- form-group end.// -->
  </div> <!-- form-row end.// -->
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" placeholder="">
    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div> <!-- form-group end.// -->
  <div class="form-group">
    <label class="form-check form-check-inline">
      <input class="form-check-input" type="text" name="gender" >
     
    </label>
    
  </div> <!-- form-group end.// -->
  <div class="form-group">
    <label>Day of Birth</label>
      <input class="form-control" type="date">
  </div> <!-- form-group end.// -->  
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Register  </button>
    </div> <!-- form-group// -->                                           
</form>
</article> <!-- card-body end .// -->
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->


</div> 

