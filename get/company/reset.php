<?php include ('snippets/header.php') ?>

<div class="container">

  <div class="row justify-content-center">
    <div class="col-4">

    <form class="form-signin">
      <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">Reset password</h1>
      </div>

      <div class="form-label-group">
        <label for="inputPassword1">New password</label>
        <input type="password" id="inputPassword1" class="form-control" placeholder="Password" required autofocus>        
      </div> 
    
    <br>
      <div class="form-label-group">
        <label for="inputPassword2">Repeat new password</label>
        <input type="password" id="inputPassword2" class="form-control" placeholder="Repeat password" required autofocus>        
      </div>  


      <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Reset password</button>
    </form>
    
  </div>
</div>

<?php include ('snippets/footer.php') ?>
