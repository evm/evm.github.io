<?php include ('snippets/header.php') ?>


<div class="container">

  <div class="row justify-content-center">
    <div class="col-4">

    <form class="form-signin">
      <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">Sign up</h1>
      </div>

      <br>
      <div class="form-label-group">
        <label for="inputFullname">Full name contact person</label>
        <input type="text" id="inputFullname" class="form-control" placeholder="Full name" required autofocus>        
      </div>

      <br>
      <div class="form-label-group">
        <label for="inputCompany">Company name</label>
        <input type="text" id="inputCompany" class="form-control" placeholder="Company name" required>        
      </div>

      <br>
      <div class="form-label-group">
        <label for="inputAddress">Address</label>
        <input type="text" id="inputAddress" class="form-control" placeholder="Address" required>        
      </div>

      <br>
      <div class="form-label-group">
        <label for="inputCity">City</label>
        <input type="text" id="inputCity" class="form-control" placeholder="City" required>        
      </div>

      <br>
      <div class="form-label-group">
        <label for="inputCountry">Country</label>
        <input type="text" id="inputCountry" class="form-control" placeholder="Country" required>        
      </div>

    
      <br>
      <div class="form-label-group">
        <label for="inputEmail">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
      </div>

      <br>
      <div class="form-label-group">
        <label for="inputPassword">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>        
      </div>      
  
      <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
    </form>

  </div>
</div>


<?php include ('snippets/footer.php') ?>