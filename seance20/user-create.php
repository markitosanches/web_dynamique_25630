<?php
$title="User register";
include_once('header.php');
?>
    <h1>Create User</h1>
    <form action="user-store.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required maxlength="45">
        <label for="username">Username</label>
        <input type="email" name="username" id="username" required maxlength="100">
        <label for="pwd">Password</label>
        <input type="password" name="password" id="pwd" minlength="6" maxlength="20">
        <input type="submit" value="Save" class="btn">
    </form>
<?php
include_once('footer.php');
?>