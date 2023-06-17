<?php namespace Project\Controllers;
use ML, settingsM, BrowserDetection;
class settings extends Controller
{
    public function main()
    {
        Masterpage::title(ML::select('Settings'));
        output(findLocation($_SERVER['HTTP_USER_AGENT']));
        exit;
    }
    public function Logged_Devices()
    {
        Masterpage::title(ML::select('LoggedDevices'));
        View::loggedDevices(settingsM::loggedDevices());
    }
}