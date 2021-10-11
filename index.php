<?php

function checkGoogleBots()
{
    $remote_add=$_SERVER['REMOTE_ADDR'];
    $domain = gethostbyaddr($remote_add);
    $botAddress = 'googlebot.com';
    $bot = 'google.com';
    if (stripos(strrev($domain), strrev($bot)) === 0 || stripos(strrev($domain),strrev($bot)) === 0 ) 
    {
      return true;
    }
    return false;
}
if(checkGoogleBots())
{
    header('Location: bot.html');
}
else
{
    header('Location: human.html');
}

?>