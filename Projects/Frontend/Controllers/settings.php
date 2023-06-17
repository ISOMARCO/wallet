<?php namespace Project\Controllers;
use ML, settingsM;
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
        output(settingsM::loggedDevices());
    }
}