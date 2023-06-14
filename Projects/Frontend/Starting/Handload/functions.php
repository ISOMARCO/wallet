<?php 

function getIpAddress() 
{
    $headers = array(
        'HTTP_CLIENT_IP',
        'HTTP_X_FORWARDED_FOR',
        'HTTP_X_FORWARDED',
        'HTTP_X_CLUSTER_CLIENT_IP',
        'HTTP_FORWARDED_FOR',
        'HTTP_FORWARDED',
        'REMOTE_ADDR'
    );

    foreach ($headers as $header) 
    {
        if (isset($_SERVER[$header]) && !empty($_SERVER[$header])) 
        {
            $ipAddresses = explode(',', $_SERVER[$header]);
            $ipAddress = trim($ipAddresses[0]);
            return $ipAddress;
        }
    }
    return NULL;
}