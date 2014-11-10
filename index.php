<?php
 include 'header.php';
 include 'class.php'; 
 ?>
<form class="form-horizontal" method="post" action="pointage.php">
<fieldset>

<!-- Form Name -->
<legend>Connection</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Login</label>  
  <div class="col-md-4">
  <input id="textinput" name="login" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Password</label>
  <div class="col-md-4">
    <input id="passwordinput" name="password" type="password" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<h4><p><font color="red"><?php if (isset($_GET['message'])){ echo $_GET['message'] ;} ?></font></p></h4>
  



<!-- Button -->
<center>
<div class="form-group">
  <label class="col-md-4 control-label" for="connectbutton"></label>
  <div class="col-md-4">
    <button id="connectbutton" name="connectbutton" class="btn btn-primary">Connection</button>
  </div>
</div>

</center>

</fieldset>
</form>
<?php include 'footer.php'; ?>