<?php
/*
 * Cookie is a small piece of information which is stored at client browser. It is used to recognize the user. It is basically string data.

 * Cookie is created at server side and saved to client browser. Each time when client sends request to the server,
 * cookie is embedded with request. Such way, cookie can be received at the server side.

 * Whenever we are putting cookie, name and value is important.
 
 * Cookie must be set before the html.
 * If we didn't provide an expire the default is 0 so it expires the moment we exit the site.
*/

// we use setcookie to fiddle with cookies

setcookie("name", "value");
setcookie("name2", "value2", time() + (1 * 24 * 60 * 60));

//for setting the expire => time() + (10 * 24 * 60 * 60) => for 10 days

if(isset($_COOKIE['name'])) {
    echo "Value for cookie 'name' => ".$_COOKIE['name']."<br>";
}
if(isset($_COOKIE['name2'])) {
    echo "Value for cookie 'name2' => ".$_COOKIE['name2']."<br>";
}

/*
 * There are two types of cookies => session and persistent
 * Session cookie expires as we leave the browser
 * Persistent means persistent cookie.
 */
