<?php include ('snippets/header.php') ?>

<div class="container">

  <div class="row justify-content-center">
    <div class="sm-12">

    <form class="form-signin">
      <div class="text-center mb-4 sm-12">
        <h1 class="h3 mb-3 font-weight-normal">Log in</h1>
      </div>

      <div class="form-label-group">
        <label for="inputEmail">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>        
      </div>  

      <br>
      <div class="form-label-group">
        <label for="inputPassword">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>        
      </div>

      <div class="checkbox mb-3">
        <br>
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
    </form>
    
    <br>
    <p>No account yet? <a href="signup.php">Sign up</a>.</p>
    <p>Forgot password? <a href="resetpassword.php">Reset password</a>.</p>
  </div>
</div>

<?php include ('snippets/footer.php') ?>
