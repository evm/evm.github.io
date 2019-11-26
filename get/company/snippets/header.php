<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

    <title>GET - Transport services</title>
  </head>
  <body>


<div class="container-fluid">
  <div class="row">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark d-block d-md-none col-sm-12">
      <a class="navbar-brand" href="index.php"><strong>GET</strong></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="transports.php">Transports <span class="sr-only">(current)</span></a>
          </li>
<!--           <li class="nav-item">
            <a class="nav-link" href="notifications.php">Notifications
              <span class="badge badge-primary">2</span>
              <span class="sr-only">unread messages</span></a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" href="add-transport.php">Transporters</a>
          </li> -->

          <li>
            <a class="btn btn-success" href="add-transport.php">Add Transport Request</a>
          </li>
        </ul>
      </div>
  </nav>
  </div>
</div>


<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-white sidebar">
      <div class="sidebar-sticky">
        <br>
        <h2 class="logo">GET</h2>
        <ul class="nav flex-column">
<!--           <li class="nav-item">
            <a class="nav-link active" href="dashboard.php">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="transports.php">
              <span data-feather="file"></span>
              Transports
              <span class="badge badge-primary">1</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="transporters.php">
              <span data-feather="file"></span>
              Transporters
            </a>
          </li>
<!--           <li class="nav-item">
            <a class="nav-link" href="notifications.php">
              <span data-feather="shopping-cart"></span>
              Notifications
              <span class="badge badge-primary">2</span>
              <span class="sr-only">unread messages</span></a>
            </a>
          </li> -->
          <hr>
          <li class="nav-item">
            <a class="nav-link text-secondary" href="dashboard.php">
              <span data-feather="bar-chart-2"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-secondary" href="dashboard.php">
              <span data-feather="bar-chart-2"></span>
              Notifications
            </a>
          </li>                  
          <li class="nav-item">
            <a class="nav-link text-secondary" href="dashboard.php">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-secondary" href="dashboard.php">
              <span data-feather="layers"></span>
              Integrations
            </a>
          </li>
          <hr>
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <span data-feather="bar-chart-2"></span>
              Logout
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4 col-sm-12 bg-light main">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 main-panel">
