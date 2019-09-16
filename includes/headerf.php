<section class="index-nav-section">
		<div class="jumbotron text-white" style="margin-bottom:0px;">
		<div class="jobotext">
		<h1>Geosuv</h1>
		  <p class="learn">Projects we have completed demonstrate what we know - future projects decide what we will learn</p>
		</div>
		
		</div>
		<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
		<a href="index.php"><img src="images/Geosuv.png" height="50" class="img-thumbnail" width="50" style="border-radius:70%;"></a>
   <a class="navbar-brand" href="#"><?php echo $_SESSION['username'] ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Subjects</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Resources
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Instruments</a>
          <a class="dropdown-item" href="#">Computation sheets</a>
          <a class="dropdown-item" href="#">Get a Surveyor</a>
          <a class="dropdown-item" href="#">Correction to error</a>
		  <a class="dropdown-item" href="#">Check for Near by control</a>
		  <a class="dropdown-item" href="#">Field Books</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>

  
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</section>

