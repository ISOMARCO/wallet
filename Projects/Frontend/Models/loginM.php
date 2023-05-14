<?php 

class loginM extends Model
{
    public static function login($email,$password)
    {
        if(Cache::select(hash('sha256',md5('Email')) && Cache::select(hash('sha256',md5('Password'))))
        {
            return DB::select('Uid','Username','Name','Surname','Lang','Role')->
            where('Email',Cache::select(hash('sha256',md5('Email')))->
            where('Password',hash('sha256',md5(Cache::select(hash('sha256',md5('Password'))))))->
            Users()->row();
        }
        else
        {
            
        }
    }
}