<?php namespace Project\Controllers;
use ML, settingsM, BrowserDetection;
class settings extends Controller
{
    public function main()
    {
        Masterpage::title(ML::select('Settings'));
        output(BrowserDetection::getDevice($_SERVER['HTTP_USER_AGENT'])['device_type']." ".BrowserDetection::getOS($_SERVER['HTTP_USER_AGENT'])['os_title']);
        #output(BrowserDetection::getOS($_SERVER['HTTP_USER_AGENT']));
    }
    public function Logged_Devices()
    {
        Masterpage::title(ML::select('LoggedDevices'));
        View::loggedDevices(settingsM::loggedDevices());
    }
}