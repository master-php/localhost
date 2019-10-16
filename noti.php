<?php session_start();
    if(!isset($_COOKIE[$noti])) {
	    setcookie('noti', $noti, time() + 2, '/');
    } else {
	    echo "The cookie '" . $visitor_username . "' is set.";
	    echo "Value of cookie: " . $_COOKIE[$visitor_username];
    }
?>



