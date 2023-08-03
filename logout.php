<?php
session_start();
session_destroy();
?>
<script>
alert('logout!');
location.replace('login.php');
</script>