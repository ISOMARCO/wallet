<?php namespace Project\Controllers;
use ML, settingsM, BrowserDetection, Post;
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
    }
    public function logoutDevice()
    {
        $id = Post::id();
        settingsM::logoutDevice($id);
    }
}