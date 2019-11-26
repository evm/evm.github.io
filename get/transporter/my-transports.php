<?php include ('snippets/header.php') ?>

<div class="container-fluid">

<div class="row">
  <div class="col-12">
    <h2>My Transports</h2>
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
            <a class="dropdown-item" href="#">Transfer completed</a>
            <a class="dropdown-item" href="#">Transfer cancelled</a>
          </div>
        </div>
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
              <span class="badge badge-primary">New</span>
              <span class="badge">16 Feb 12:59</span>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <h3><a href="transport-won.php" class="text-dark"><u>Amsterdam &rarr; Schiphol</u></a></h3>
              <p>Available: 14 Feb 2018 - Drop off: 15 Feb 2018.</p>                
              <p><span class="car align-middle"></span> 5 cars</p>
              <a class="btn btn-success" href="transport-completed.php">Mark transfer completed</a>
            </div>
            <div class="col-6">              
              <div class="bd-callout">
                <div class="row">
                  <div class="col">
                    <span class="badge">Accepted bid <small>(15 Feb 13:03)</small></span>
                  </div>
                  <div class="col">
                    <p class="text-right"><a href="transporter.php" class="text-dark"><u>&#8203;</u></a></p>
                  </div>  
                </div>
                <h4 class="mb-1">€ 150</h4>  
                <p class="mb-1">We have to get more cars in this area so we can combine the transports.</p>
              </div>
              <div class="list-group">
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
        <div class="card-body">
          <div class="row">
            <div class="col">
              <span class="badge badge-outline-secondary transport-state">16 Feb 12:59</span>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <h3><a href="transport-won.php" class="text-dark"><u>Amsterdam &rarr; Schiphol</u></a></h3>
              <p>Available: 14 Feb 2018 - Drop off: 15 Feb 2018.</p>                
              <p><span class="car align-middle"></span> 5 cars</p>

          <a class="btn btn-success" href="transport-completed.php">Mark transfer completed</a>
            </div>
            <div class="col-6">              
              <div class="bd-callout">
                <div class="row">
                  <div class="col">
                    <span class="badge">Accepted bid <small>(15 Feb 13:03)</small></span>
                  </div>
                  <div class="col">
                    <p class="text-right"><a href="transporter.php" class="text-dark"><u>&#8203;</u></a></p>
                  </div>  
                </div>
                <h4 class="mb-1">€ 150</h4>  
                <p class="mb-1">We have to get more cars in this area so we can combine the transports.</p>
              </div>
              <div class="list-group">
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
        <div class="card-body">
          <div class="row">
            <div class="col">
              <span class="badge badge-outline-secondary transport-state">16 Feb 12:59</span>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <h3><a href="transport-won.php" class="text-dark"><u>Amsterdam &rarr; Schiphol</u></a></h3>
              <p>Available: 14 Feb 2018 - Drop off: 15 Feb 2018.</p>                
              <p><span class="car align-middle"></span> 5 cars</p>
            </div>
            <div class="col-6">              
              <div class="bd-callout">
                <div class="row">
                  <div class="col">
                    <span class="badge">Accepted bid <small>(15 Feb 13:03)</small></span>
                  </div>
                  <div class="col">
                    <p class="text-right"><a href="transporter.php" class="text-dark"><u>&#8203;</u></a></p>
                  </div>  
                </div>
                <h4 class="mb-1">€ 150</h4>  
                <p class="mb-1">We have to get more cars in this area so we can combine the transports.</p>
              </div>
              <div class="list-group">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
            <div class="btn-group">
              <p class="text-success"><strong>Transfer completed</strong></p>
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
        <div class="card-body">
          <div class="row">
            <div class="col">
              <span class="badge badge-outline-secondary transport-state">16 Feb 12:59</span>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <h3><a href="transport-won.php" class="text-dark"><u>Amsterdam &rarr; Schiphol</u></a></h3>
              <p>Available: 14 Feb 2018 - Drop off: 15 Feb 2018.</p>                
              <p><span class="car align-middle"></span> 5 cars</p>
            </div>
            <div class="col-6">              
              <div class="bd-callout">
                <div class="row">
                  <div class="col">
                    <span class="badge">Accepted bid <small>(15 Feb 13:03)</small></span>
                  </div>
                  <div class="col">
                    <p class="text-right"><a href="transporter.php" class="text-dark"><u>&#8203;</u></a></p>
                  </div>  
                </div>
                <h4 class="mb-1">€ 150</h4>  
                <p class="mb-1">We have to get more cars in this area so we can combine the transports.</p>
              </div>
              <div class="list-group">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
            <div class="btn-group">
              <p class="text-secondary"><strong>Transfer cancelled</strong></p>
            </div>
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
