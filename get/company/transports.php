<?php include ('snippets/header.php') ?>

<div class="container-fluid">

<div class="row">
  <div class="col-12">
    <h2>Transports</h2>
  </div>
</div>
<br>

  <div class="row">
    <div class="col">
      <div class="btn-group">
        <div class="dropdown">
          <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            From
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Anywhere</a>
            <a class="dropdown-item" href="#">Schiphol</a>
            <a class="dropdown-item" href="#">Amsterdam</a>
          </div>
        </div>
      </div>
      <div class="btn-group">
        <div class="dropdown">
          <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            To
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Anywhere</a>
            <a class="dropdown-item" href="#">Schiphol</a>
            <a class="dropdown-item" href="#">Amsterdam</a>
          </div>
        </div>
      </div>
      <div class="btn-group">
        <div class="dropdown">
          <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Transport status
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">All</a>
            <a class="dropdown-item" href="#">Open</a>
            <a class="dropdown-item" href="#">Accepted</a>
            <a class="dropdown-item" href="#">Completed</a>
            <a class="dropdown-item" href="#">Cancelled</a>
          </div>
        </div>
      </div>

    </div>
    <div class="col-4 text-right">
      <div class="btn-group">
        <a class="btn btn-success d-none d-sm-block" href="add-transport.php">Add Transport Request</a>
      </div> 
    </div>
  </div>
  
  <br>
  <div class="row">
    <div class="col-12">
      <div class="card box-shadow border-primary">
        <div class="card-body">
          <div class="row">
            <div class="col">
              <span class="badge badge-primary transport-state">New</span><span class="badge">14 Feb 15:05</span>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <h3><a href="transport.php" class="text-dark"><u>Amsterdam &rarr; Schiphol</u></a></h3>
              <p>Available: 14 Feb 2018 - Drop off: 15 Feb 2018.</p>                
              <p><span class="car align-middle"></span> 5 cars</p>
            </div>
            <div class="col-6">              
              <!-- <div class="bd-callout">
                <div class="row"> 
                </div>
                <p class="mb-1"><a href="transport.php" class="text-secondary">No bids placed.</a></p>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <br>
  <div class="row">
    <div class="col-12">
      <div class="card box-shadow">
        <div class="card-body">
          <div class="row">
            <div class="col">
              <span class="badge badge-outline-secondary transport-state">16 Feb 12:59</span>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <h3><a href="transport.php" class="text-dark"><u>Amsterdam &rarr; Schiphol</u></a></h3>
              <p>Available: 14 Feb 2018 - Drop off: 15 Feb 2018.</p>                
              <p><span class="car align-middle"></span> 5 cars</p>
            </div>
            <div class="col-6">              
              <div class="bd-callout">
                <div class="row">
                  <div class="col">
                    <span class="badge badge">Best bid <small>(15 Feb 13:03)</small></span>
                  </div>
                  <div class="col">
                    <p class="text-right"><a href="transporter.php" class="text-dark"><u>Nasa Cars BV</u></a></p>
                  </div>  
                </div>
                <h4 class="mb-1">€ 150</h4>  
                <p class="mb-1">We have to get more cars in this area so we can combine the transports.</p>
              </div>
              <div class="list-group">
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <!-- <button type="button" class="btn btn-outline-primary">Accept bid</button>
                    <button type="button" class="btn btn-outline-danger">Reject bid</button> -->
                    <a class="btn btn-light" href="transport.php">View bid</a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <br>
  <div class="row">
    <div class="col-12">
      <div class="card box-shadow">
        <div class=" text-dark">
        </div>
        <div class="card-body">
                    <div class="row">
            <div class="col">
              <span class="badge badge-outline-secondary transport-state">16 Feb 12:59</span>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <h3><a href="transport.php" class="text-dark"><u>Amsterdam &rarr; Schiphol</u></a></h3>
              <p>Available: 14 Feb 2018 - Drop off: 15 Feb 2018.</p>                
              <p><span class="car align-middle"></span> 5 cars</p>
            </div>
            <div class="col-6">              
              <div class="bd-callout bd-callout-warning">
                <div class="row">
                  <div class="col">
                    <span class="badge badge-warning">New best bid: (15 Feb 13:03)</span>
                  </div>
                  <div class="col">
                    <p class="text-right"><a href="transporter.php" class="text-dark"><u>Nasa Cars BV</u></a></p>
                  </div>  
                </div>
                <h4 class="mb-1">€ 130</h4>  
                <p class="mb-1">We have to get more cars in this area so we can combine the transports.</p>
              </div>
              <div class="list-group">
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <!-- <button type="button" class="btn btn-outline-primary">Accept bid</button>
                    <button type="button" class="btn btn-outline-danger">Reject bid</button> -->
                    <a class="btn btn-light" href="transport.php">View bids (2)</a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <br>
  <div class="row">
    <div class="col-12">
      <div class="card box-shadow">
        <div class=" text-dark">
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col">
              <span class="badge badge-outline-secondary transport-state">16 Feb 12:59</span>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <h3><a href="transport.php" class="text-dark"><u>Amsterdam &rarr; Schiphol</u></a></h3>
              <p>Available: 14 Feb 2018 - Drop off: 15 Feb 2018.</p>                
              <p><span class="car align-middle"></span> 5 cars</p>
            </div>
            <div class="col-6">              
              <div class="bd-callout">
                <div class="row">
                  <div class="col">
                    <span class="badge badge">Best bid <small>(15 Feb 13:03)</small></span>                    
                  </div>
                  <div class="col">
                    <p class="text-right"><a href="transporter.php" class="text-dark"><u>Nasa Cars BV</u></a></p>
                  </div>  
                </div>
                <h4 class="mb-1">€ 130</h4>  
                <p class="mb-1">We have to get more cars in this area so we can combine the transports.</p>
              </div>
              <div class="list-group">
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <!-- <button type="button" class="btn btn-outline-primary">Accept bid</button>
                    <button type="button" class="btn btn-outline-danger">Reject bid</button> -->
                    <a class="btn btn-light" href="transport.php">View bids (2)</a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <br>
  <div class="row">
    <div class="col-12">
      <div class="card box-shadow">
        <div class=" text-dark">
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col">
              <span class="badge badge-outline-secondary transport-state">16 Feb 12:59</span>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <h3><a href="transport.php" class="text-dark"><u>Amsterdam &rarr; Schiphol</u></a></h3>
              <p>Available: 14 Feb 2018 - Drop off: 15 Feb 2018.</p>                
              <p><span class="car align-middle"></span> 5 cars</p>
            </div>
            <div class="col-6">              
  <!--             <div class="bd-callout">
                <div class="row"> 
                </div>
                <p class="mb-1"><a href="transport.php" class="text-secondary">No bids placed.</a></p>
              </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>








  <br>
  <!-- Pagination  -->
  <div class="row">
    <div class="col-12">
      <nav aria-label="...">
        <ul class="pagination">
          <li class="page-item disabled">
            <span class="page-link">Previous</span>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item active">
            <span class="page-link">
            2
            <span class="sr-only">(current)</span>
            </span>
          </li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>

  


  <?php include ('snippets/footer.php') ?>
