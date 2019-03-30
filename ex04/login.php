<?php
include 'auth.php';
session_start();
if ($_POST['submit'] != null) {
    if (auth($_POST['login'], $_POST['passwd']) == true) {
        $_SESSION['loggued_on_user'] = $_POST['login'];
        ?>
<link rel="stylesheet" href="style.css" type="text/css">
<div class="wrapper">
    <div id="formContent">
        <iframe name="chat" src="chat.php" width="100%" height="550px"></iframe>
        <iframe name="speak" src="speak.php" width="100%" height="50px"></iframe>
    </div>
</div>
<?php
} else {
        $_SESSION['loggued_on_user'] = "";
        echo "ERROR\n";
    }
}
?>
