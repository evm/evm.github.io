<?php include ('snippets/header.php') ?>

<div class="container-fluid">
  <div class="row">

      <div class="col-6">
        <h2>Edit Transport Request</h2>
        <form class="">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Number of vehicles</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>etc.</option>
            </select>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput1">Pickup location</label>
            <input type="text" class="form-control" id="formGroupExampleInput1" placeholder="Pickup location">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Drop off location</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Drop off location">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput3">Availabe from</label>
          <input id="formGroupExampleInput3" type="date" class="form-control">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput4">Drop off date</label>
            <input id="formGroupExampleInput4" type="date" class="form-control">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput5">License plate(s)</label>
            <input type="text" class="form-control" id="formGroupExampleInput5" placeholder="License plate(s)">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Notes</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
          </div>
          <button type="submit" class="btn btn-success">Save changes</button>
        </form>

      </div>

      <div class="col-6">
      </div>

  </div>
<?php include ('snippets/footer.php') ?>
