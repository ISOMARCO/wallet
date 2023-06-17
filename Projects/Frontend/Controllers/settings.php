<?php namespace Project\Controllers;
use ML, settingsM, BrowserDetection;
class settings extends Controller
{
    public function main()
    {
        Masterpage::title(ML::select('Settings'));
    }
    public function Logged_Devices()
    {
        Masterpage::title(ML::select('LoggedDevices'));
        View::loggedDevices(settingsM::loggedDevices());
        $apiURL = 'https://api.ipbase.com/v1/json/94.20.178.54'; 
        $curl = curl_init($apiURL);  
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);  
        $response = curl_exec($curl); 
        curl_close($curl);  
        output(json_decode($response, true)); 
        #output(findLocation('94.20.178.54')); 
    }
}