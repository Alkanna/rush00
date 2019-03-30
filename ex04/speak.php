<?php
session_start();
if ($_SESSION['loggued_on_user'] != "") {
    if (isset($_POST['submit'])) {
        if ($_POST['submit'] == "OK" && $_POST['msg'] != null) {
            if (file_exists("../private/chat") == false) {
                $array = array(array('time' => time(), 'login' => $_SESSION['loggued_on_user'], 'msg' => $_POST['msg']));
                $s_array = serialize($array);
                file_put_contents("../private/chat", $s_array, LOCK_EX);
            } else {
                $filelock = fopen("../private/chat", "c+");
                @flock($filelock, LOCK_EX | LOCK_SH);
                $array = file_get_contents("../private/chat");
                @flock($filelock, LOCK_UN);
                fclose($filelock);
                $us_array = unserialize($array);
                $us_array[] = array('time' => time(), 'login' => $_SESSION['loggued_on_user'], 'msg' => $_POST['msg']);
                $s_array = serialize($us_array);
                file_put_contents("../private/chat", $s_array, LOCK_EX);
            }
        }
    }
    ?>
<html>
<script langage="javascript">
top.frames['chat'].location = 'chat.php';
</script>

<head>
</head>

<body>

    <form method="POST" action="">
        <input type="text" name="msg" value="" />
        <input type="submit" name="submit" value="OK">
    </form>

</body>

</html>

<?php
}
?>
