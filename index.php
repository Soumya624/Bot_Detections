<?php

function is_bot_dns(){
    $ipaddress = getenv("REMOTE_ADDR");
    $domain = gethostbyaddr($ipaddress);
    $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
    if($hostname === $_SERVER['REMOTE_ADDR']) {
        return 1;
    } 
    else {
        return 0;
    }
       
}

if(is_bot_dns())
{
    header('Location: bot.html');
}
else
{
    header('Location: human.html');
}

?>