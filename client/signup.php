<div class="container">
    <h1 class="header margin-bottom">Signup</h1>
    <form method="post" action="./server/requests.php">
    <div class="col-6 offset-sm-3 margin-bottom">
        <label for="username" class="form-label">User Name</label>
        <input type="text" name="username" class="form-control" id="username" placeholder="Enter User Name...">        
    </div>
    <div class="col-6 offset-sm-3 margin-bottom">
        <label for="emailId" class="form-label">E-Mail</label>
        <input type="email" name="email" class="form-control" id="emailId" placeholder="Enter User E-Mail...">        
    </div>
    <div class="col-6 offset-sm-3 margin-bottom">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Enter Your Password..."> 
    </div>
    <div class="col-6 offset-sm-3 margin-bottom">
        <label for="address" class="form-label">User Address</label>
        <input type="text" name="address" class="form-control" id="address" placeholder="Enter User Address...">        
    </div>
    <div class="col-6 offset-sm-3 margin-bottom">
        <button type="submit" name="signup" class="btn btn-primary">Sign In</button>
    </div>
    </form>
</div>