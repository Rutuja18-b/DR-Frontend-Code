<?php
    include "header.php";
?>
<div class="container text-center my-4">
    <h1>Login</h1>
</div>
<div class="container my-4" style="width:50%">
<form>
  <div class="form-group my-4">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group my-2">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
<div style="text-align:center;">
<button type="submit" class="btn btn-primary text-center" style="text-align:center;margin-top:10%;">Submit</button>

</div>  
<div  style="text-align:center">
<small style="text-align:center"><a href="signIn.php">Register</a></small>
</div>
</form>
</div>