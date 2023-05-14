<?php 

class loginM extends Model
{
    public static function login($email,$password)
    {
        
        return DB::select('Uid','Username','Name','Surname','Lang','Role')->
        where('Email',$email)->
        where('Password',hash('sha256',md5($password)))->
        Users()->row();
    }
}