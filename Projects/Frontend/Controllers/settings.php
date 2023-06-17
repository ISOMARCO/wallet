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
        echo json_encode(['success' => $id]);
        return;
        if(settingsM::logoutDevice($id)) 
        {
            echo json_encode(['success' => true]);
            return;
        }
        echo json_encode(['success' => false]);
        return;
    }
}