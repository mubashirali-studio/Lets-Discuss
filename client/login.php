<div class="container">
    <h1 class="header margin-bottom">LogIn</h1>
    <form action="./server/requests.php" method="post">

    <div class="col-6 offset-sm-3 margin-bottom">
        <label for="emailId" class="form-label">E-Mail</label>
        <input type="email" name="email" class="form-control" id="emailId" placeholder="Enter User E-Mail...">        
    </div>
    <div class="col-6 offset-sm-3 margin-bottom">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Enter Your Password..."> 
    </div>
    <div class="col-6 offset-sm-3 margin-bottom">
        <button type="submit" name="login" class="btn btn-primary">Log In</button>
    </div>
    </form>
</div>