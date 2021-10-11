<?php

function is_bot_dns()
{

    $ip_addr = gethostbyname("https://soumya-bot-detection-ip.herokuapp.com/");
    if($ip_addr !== "https://soumya-bot-detection-ip.herokuapp.com/") {
        return 1;
    } else {
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