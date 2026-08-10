<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="./"><img src="./public/Logo.png" height="70"></a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="./">Home</a>
        
        <?php if(isset($_SESSION['user']['username'])) { ?>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="./server/requests.php?logout=true">Log Out(<?php echo ucfirst($_SESSION['user']['username']) ?>)</a>
          </li>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="?ask=true">Ask Question</a>
          </li> 
          <li class="nav-item">
          <a class="nav-link" href="?u-id=<?php echo $_SESSION['user']['user_id'] ?>">My Question</a>
          </li>         
        <?php } ?>

        <?php if(!isset($_SESSION['user']['username'])) { ?>
        <li class="nav-item">
          <a class="nav-link" href="?login=true">Log In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?signup=true">Sign Up</a>
        </li>
        <?php } ?>

        <li class="nav-item">
          <a class="nav-link" href="?latest=true">Latest Questions</a>
        </li>
      </ul>
      
    </div>
    <form class="d-flex" action="">
        <input class="form-control me-2" name="search" type="search" placeholder="Search Questions...">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
  </div>
</nav>
