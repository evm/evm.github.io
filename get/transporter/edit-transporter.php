<?php include ('snippets/header.php') ?>

<div class="container-fluid">


  <div class="row">
    <div class="col-12">
      <h2>Edit profile</h2>
    </div>
  </div>

  <div class="row">
    <div class="col-6">

    <form class="form-signin">
  
      <br>
      <div class="form-label-group">
        <label for="inputFullname">Full name (contact person)</label>
        <input type="text" id="inputFullname" class="form-control" placeholder="Full name" required autofocus>
      </div>

      <br>
      <div class="form-label-group">
        <label for="inputPhone">Company phone number</label>
        <input type="text" id="inputPhone" class="form-control" placeholder="Phone number" required autofocus>
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
        <label for="transporterHeaderImage">Header image (Best: 1000px width 200px height)</label>
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFile">
          <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
      </div>



      <br>
      <div class="form-label-group">
        <label for="inputTransportArea">Transport Area</label>
        <textarea  id="inputTransportArea" class="form-control" cols="20"></textarea>
      </div>

    <br>
   
      <h3>Authorisation details</h3>
      
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
      <button class="btn btn-lg btn-primary btn-block" type="submit">Save changes</button>
    </form>

  </div>
</div>


<?php include ('snippets/footer.php') ?>