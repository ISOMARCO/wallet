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
            $row = $query->row();
            if($rememberMe)
            {
                Cookie::insert( hash('sha256',md5('Email')),encrypt($email),(60*60*24*365) );
                Cookie::insert( hash('sha256',md5('Password')),encrypt($password),(60*60*24*365) );
                Cache::insert('userInfo_'.$row->Uid,$row->Uid);
            }
            return $row;
        }
        return NULL;
    }
}