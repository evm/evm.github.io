<?php include ('snippets/header.php') ?>

<div class="container-fluid">


  <div class="row">
    <div class="col-1">
      <h2>Transport</h2>
    </div>
    <div class="col-11 text-right">
    </div>
  </div>

  <br>


  <div class="row">
    <div class="col">
      <div class="btn-group">
        <a href="transports.php" class="btn btn-outline-secondary">&larr; Go back</a>
      </div>
      <div class="btn-group">
        <div class="dropdown">
          <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Options
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="edit-transport.php">Edit</a>
            <a class="dropdown-item" href="add-transport.php">Duplicate</a>
            <a class="dropdown-item" href="#">Delete</a>        
          </div>
        </div>
      </div>

    </div>
  </div>


<br>
  <div class="row">
    <div class="col">
      <div class="jumbotron transport-header">
        <h1 class="text-dark"><span class="transport-header-text">Amsterdam &rarr; Schiphol</span></h1>
        <p><span class="transport-header-text">14 Feb 2018 - 29 Feb 2018</span></p>
      </div>
    </div>
  </div>


<br>
  <div class="row">
    <div class="col">
      <h2>Details</h2>
      <table class="table bg-white">
        <tbody>
          <tr>
            <th scope="row">Number of vehicles</th>
            <td>5 cars</td>
          </tr>
          <tr>
            <th scope="row">Pickup location</th>
            <td>Amsterdam, The Netherlands</td>
          </tr>
          <tr>
            <th scope="row">Drop off location</th>
            <td>Schiphol, The Netherlands</td>
          </tr>
          <tr>
            <th scope="row">Availabe from</th>
            <td>14 Feb 2018 10:00</td>
          </tr>
          <tr>
            <th scope="row">Drop off date</th>
            <td>29 Feb 2018</td>
          </tr>
          <tr>
            <th scope="row">License plate(s)</th>
            <td>23-WEF-1, 23-WEF-2, 23-WEF-3, 23-WEF-4, 23-WEF-5</td>
          </tr>
          <tr>
            <th scope="row">Notes</th>
            <td>These are very expensive cars. Please try to drive carefully and do not exceed the speed limit of 80 kmpu.</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="col">

      <div class="row">
        <div class="col-12">
          <h2>Bids</h2>
        </div>
      </div>
    <div class="row">
      <div class="col-12">              
        <div class="bd-callout card bd-callout-warning">
          <div class="row">
            <div class="col">
              <span class="badge badge-warning">New best bid <small>(15 Feb 13:03)</small></span>
            </div>
            <div class="col">
              <p class="text-right"><a href="transporter.php" class="text-dark"><u>Nasa Cars BV</u></a></p>
            </div>  
          </div>
          <div class="row"> 
            <div class="col">
            <h4 class="mb-1">€ 150</h4>  
            <p class="mb-1">We have to get more cars in this area so we can combine the transports.</p>
            </div>
          </div>
          <div class="row transport-button-bar">
            <div class="col">
              <div class="list-group">
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Accept bid</button>
                    <button type="button" class="btn btn-secondary">Reject bid</button>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12">              
        <div class="bd-callout card">
          <div class="row">
            <div class="col">
              <span class="badge badge">Bid <small>(15 Feb 13:03)</small></span>
            </div>
            <div class="col">
              <p class="text-right"><a href="transporter.php" class="text-dark"><u>Nasa Cars BV</u></a></p>
            </div>  
          </div>
          <div class="row"> 
            <div class="col">
            <h4 class="mb-1">€ 250</h4>  
            <p class="mb-1">We have to get more cars in this area so we can combine the transports.</p>
            </div>
          </div>
          <div class="row transport-button-bar">
            <div class="col">
              <div class="list-group">
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Accept bid</button>

                    <button type="button" class="btn btn-secondary">Reject bid</button>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>



      <div class="col-12">              
        <div class="bd-callout card bd-callout-success">
          <div class="row">
            <div class="col">
              <span class="badge badge">Bid <small>(15 Feb 13:03)</small></span>
            </div>
            <div class="col">
              <p class="text-right"><a href="transporter.php" class="text-dark"><u>Nasa Cars BV</u></a></p>
            </div>  
          </div>
          <div class="row"> 
            <div class="col">
            <h4 class="mb-1">€ 250</h4>  
            <p class="mb-1">We have to get more cars in this area so we can combine the transports.</p>
            </div>
          </div>
          <div class="row transport-button-bar">
            <div class="col">
              <div class="list-group">
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <p class="text-success">Bid accepted on 10 May 2018 - 23:12 <span><a class="text-dark" href="#"><u>undo</u></a></span></p>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>



      <div class="col-12">              
        <div class="bd-callout card bd-callout-rejected">
          <div class="row">
            <div class="col">
              <span class="badge badge">Bid <small>(15 Feb 13:03)</small></span>
            </div>
            <div class="col">
              <p class="text-right"><a href="transporter.php" class="text-dark"><u>Nasa Cars BV</u></a></p>
            </div>  
          </div>
          <div class="row"> 
            <div class="col">
            <h4 class="mb-1">€ 250</h4>  
            <p class="mb-1">We have to get more cars in this area so we can combine the transports.</p>
            </div>
          </div>
          <div class="row transport-button-bar">
            <div class="col">
              <div class="list-group">
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <p class="text-secondary">Bid rejected on 10 May 2018 - 23:12 <span><a class="text-dark" href="#"><u>undo</u></a></span></p>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>



  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><strong>Are you sure you want to accept this bid?</strong></p>
        <p>€150 by Nasa Cars BV</p>
        <p>We have to get more cars in this area so we can combine the transports.</p>

        <form action="#">
          <div class="form-group">
            <label for="messageAccept">Message(optional)</label>
            <textarea class="form-control"  id="messageAccept" cols="20" rows=""></textarea>
          </div>
        </form>

      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Accept bid</button>
        <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
      </div>
    </div>
  </div>
</div>

  <?php include ('snippets/footer.php') ?>
