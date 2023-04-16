<?php
session_start();
$username = 'yusuf';
$password = 'admin';
if (isset($_POST['submit'])) {
    if ($_POST['username'] == $username && $_POST['password'] == $password){
        $_SESSION["username"] = $username; 
        echo "Anda Berhasil Login $username";
      
        header("Location: loginAct.php"); 
    } else {
        display_login_form();
        echo '<p>Username Atau Password Tidak Benar</p>';
         header("Location: salah.php");
    }
}    
else { 
    display_login_form();
}
function display_login_form(){ ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
        <label>Silahkan masuk ke akun anda</label>
        <br>
    <label for="username">id</label>
    <input type="text" name="username" id="username">
    <label for="password">password</label>
    <input type="password" name="password" id="password">
    <input type="submit" name="submit" value="submit">
    </form>    
<?php } ?>