<?php

function is_bot_ip() {
    $ipaddress = getenv("REMOTE_ADDR") ;
    function iprange($needle, $start, $end) {
    if((ip2long($needle) >= ip2long($start)) && (ip2long($needle) <= ip2long($end))) {
    return true; 
    }
    return false;
    }
    // Client IP, Range start, Range end.
    $Check = new SplFixedArray(18); 
    $Check[0] = iprange($ipaddress, '64.233.160.0', '64.233.191.255');
    $Check[1] = iprange($ipaddress, '66.102.0.0', '66.102.15.255');
    $Check[2] = iprange($ipaddress, '66.249.64.0', '66.249.95.255');
    $Check[3] = iprange($ipaddress, '72.14.192.0', '72.14.255.255');
    $Check[4] = iprange($ipaddress, '74.125.0.0', '74.125.255.255');
    $Check[5] = iprange($ipaddress, '209.85.128.0', '209.85.255.255');
    $Check[6] = iprange($ipaddress, '216.239.32.0', '216.239.63.255');
    $Check[7] = iprange($ipaddress, '64.18.0.0', '64.18.15.255');
    $Check[8] = iprange($ipaddress, '108.177.8.0', '108.177.15.255');
    $Check[9] = iprange($ipaddress, '172.217.0.0', '172.217.31.255');
    $Check[10] = iprange($ipaddress, '173.194.0.0', '173.194.255.255');
    $Check[11] = iprange($ipaddress, '207.126.144.0', '207.126.159.255');
    $Check[12] = iprange($ipaddress, '216.58.192.0', '216.58.223.255');
    $Check[13] = iprange($ipaddress, '64.68.90.1', '64.68.90.255');
    $Check[14] = iprange($ipaddress, '64.233.173.193', '64.233.173.255');
    $Check[15] = iprange($ipaddress, '66.249.64.1', '66.249.79.255');
    $Check[16] = iprange($ipaddress, '216.239.33.96', '216.239.59.128');
    $Check[17] = iprange($ipaddress, '8.8.8.8.8', '8.8.8.4.4');
    
    for ($i = 0; $i<13; $i++) {
    if ($Check[$i] == 1){
        return 1;
    }
    }
   
}

if(is_bot_ip())
{
    header('Location: bot.html');
}
else
{
    header('Location: human.html');
}

?>