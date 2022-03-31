<?php

if($_POST["message"]) {
    mail("elijahpele@gmail.com", "RSVP",
        $_POST["message"]. "From: elijahpele@gmail.com");
}
?>

<!doctype html>
<html>
<link rel="stylesheet" type="text/css" href="../bigday_v&j/css/index.css">
<title>The Big Day</title>
<body>
<header>
    <div class="nameTag">Victoria & Jeremy</div>
    <div class="menu_bar">
        <button type="button" class="menu_button" onclick ="location.href ='home.php';">Home</button>
        <button type="button" class="menu_button" onclick ="location.href ='info.php';">Info</button>
        <button type="button" class="menu_button" onclick ="location.href ='reservation.php';"><u>RSVP</u></button>
        <button type="button" class="menu_button" onclick ="location.href ='contact.php';">Contact</button>
    </div>
</header>
<form method="post" action="reservation.php">
    <textarea name="message"></textarea>
    <input type="submit">
</form>
</body>
</html>