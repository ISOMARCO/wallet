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
        echo findLocation('94.20.178.54', ['country_name', 'region_name']);
    }
}