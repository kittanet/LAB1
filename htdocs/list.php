<html>
<link rel="stylesheet" href="bootstrap.css">
<body>
    <br>
    <div class="mx-auto" style="width: 750px; background-color:BEBEBE">
    <div class="mx-auto" style="width: 700px;">
    <br>
<?php
    require 'predis/src/Autoloader.php';
    Predis\Autoloader::register();
    $client = new Predis\Client();

    if($_POST['name']!=''&&$_POST['password']!=''&&$_POST['name']!=''&&$_POST['yearofbirth']!=''&&$_POST['password']=== $_POST['repassword']){
        $no = $client->get('no');
        if($no==''){
            $client->set('no','1');
            $no = $client->get('no');
            $user = 'user_'.$no;
            $client->hmset($user,'username',$_POST['username'],'password',$_POST['password'],'name',$_POST['name'],'yearofbirth',$_POST['yearofbirth']);
        }else{
            $client->incr('no');
            $no = $client->get('no');
            $user = 'user_'.$no;
            $client->hmset($user,'username',$_POST['username'],'password',$_POST['password'],'name',$_POST['name'],'yearofbirth',$_POST['yearofbirth']);
        }
        echo "<div class='alert alert-success' role='alert'>Success !!!</div></div>";
    }else{
        if($_POST['username']==='')
        {
            echo "<div class='alert alert-danger' role='alert'>Oops! You did not enter the Username. Try again.</div>";
        }
        if($_POST['password']==='')
        {
            echo "<div class='alert alert-danger' role='alert'>Oops! You did not enter the Password. Try again.</div>";
        }
        if($_POST['name']==='')
        {
            echo "<div class='alert alert-danger' role='alert'>Oops! You did not enter the Name. Try again.</div>";
        }
        if($_POST['yearofbirth']==='')
        {
            echo "<div class='alert alert-danger' role='alert'>Oops! You did not enter the Year of Birth. Try again.</div>";
        }
        if ($_POST['password']!= $_POST['repassword'])
        {
            echo "<div class='alert alert-danger' role='alert'>Oops! Password did not match! Try again.</div>";
        }
        echo "</div>";
    }
?>
    <div class='mx-auto' style='width: 700px; background-color:ffffff'>
    <?php
    $no = $client->get('no');
    echo "<table class='table'><thead class=''thead-dark''><tr><th scope='col'>#</th><th scope='col'>Username</th><th scope='col'>Password</th><th scope='col'>Name</th><th scope='col'>Year of Birth</th></tr></thead><tbody>";
    for($i=1;$i<=$no;$i++){
        $user = 'user_'.$i;
        $username =  $client->hget($user,'username');
        $password = $client->hget($user,'password');
        $name = $client->hget($user,'name');
        $yearofbirth = $client->hget($user,'yearofbirth');
        echo "<tr><th scope='row'>$i</th><td>$username</td><td>$password</td><td>$name</td><td>$yearofbirth</td></tr>";
    }
    ?>
    </div>

    <div class='mx-auto' style='width: 700px; background-color:aaaaaa'>
    <h3><a href="test.php"><<< Back</a></h3>
    </div>

    </div>
</body>
</html>