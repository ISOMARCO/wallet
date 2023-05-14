<?php 

class loginM extends Model
{
    public static function login($email,$password,$rememberMe=false)
    {
        $password = hash('sha256',md5($password));
        $query = DB::select('Uid','Username','Name','Surname','Lang','Role')->
        where('Email',$email)->
        where('Password',$password)->
        Users();
        if($query->totalRows())
        {
            if($rememberMe)
            {
                Cookie::insert( hash('sha256',md5('Email')),encrypt($email) );
                Cookie::insert( hash('sha256',md5('Password')),encrypt($password) );
            }
            return $query->row();
        }
        return NULL;
    }
}