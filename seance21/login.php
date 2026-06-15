<?php
$title="Login";
include_once('header.php');
$msg = '';
if(isset($_GET['msg'])){
    if($_GET['msg']==1){
        $msg = 'Please check username';
    }elseif($_GET['msg']==2){
        $msg = 'Please check password';
    }else{
        $msg= 'Error';
    }
}
?>
    <h1>Login</h1>
    <form action="auth.php" method="post">
        <span class="text-danger"><?=  $msg; ?></span>
        <label for="username">Username</label>
        <input type="email" name="username" id="username" required maxlength="100">
        <label for="pwd">Password</label>
        <input type="password" name="password" id="pwd" minlength="6" maxlength="20">
        <input type="submit" value="Login" class="btn">
    </form>
<?php
include_once('footer.php');
?>