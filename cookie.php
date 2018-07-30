<?php
$cookie_name = 'php_cookie';
$cookie_value = 'php_cookie_value';
setcookie($cookie_name, $cookie_value, time() + (86400 * 30)); // 86400 = 1 day //cookie creation

//read cookies

if(isset($_COOKIE[$cookie_name])) {
  print 'Cookie with name "' . $cookie_name . '" does not exist...';
} else {
  print 'Cookie with name "' . $cookie_name . '" value is: ' . $_COOKIE[$cookie_name];
}


//update cookies
 
setcookie($cookie_name, $cookie_value, time() + (86400 * 10)-3600); // 86400 = 1 day



//delete cookies

//unset($_COOKIE[$cookie_name]);
// empty value and expiration one hour before
//setcookie($cookie_name, time() - 3600);
?>
