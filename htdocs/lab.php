<html>
<link rel="stylesheet" href="bootstrap.css">
<body>
    <center>
    <br><h2>Information</h2><br>   
    <div class="mx-auto" style="width: 550px; background-color:00ff80">
    <div class="mx-auto" style="width: 500px;">
    <form action="list.php" method="post">
    <br>
    <div class="form-group">
        <label for="Username"><strong>Username</strong></label>
        <input type="text" class="form-control" id="Username"  placeholder="Enter Username" name="username">
    </div>
    <div class="form-group">
        <label for="Password"><strong>Password</strong></label>
        <input type="password" class="form-control" id="Password" placeholder="Enter Password" name="password">
    </div>
    <div class="form-group">
        <label for="Repassword"><strong>Re-Password</strong></label>
        <input type="password" class="form-control" id="Repassword" placeholder="Enter Re-Password" name="repassword">
    </div>
    <div class="form-group">
        <label for="Name"><strong>Name</strong></label>
        <input type="text" class="form-control" id="Name" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
        <label for="Year"><strong>Year of Birth</strong></label>
        <input type="text" class="form-control" id="Year" placeholder="Enter Year of Birth" name="yearofbirth">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    <br>
    <br>
    </form>
    </div>
    </div>
    </div>
    </center>
</body>
</html>