<?php 

class loginM extends Model
{
    public static function login($email,$password,$rememberMe=false)
    {
        $password = hash('sha256',md5($password));
        $query = DB::select('Username','Name','Surname','Lang','Role')->
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
            }
            self::makeUserCache($row);
            return $row;
        }
        return NULL;
    }
    public static function makeUserCache($data = NULL)
    {
        if($data == NULL)
        {
            $row = DB::select('Username','Name','Surname','Lang','Role')->
            where('Uid',Session::Uid())->
            Users()->row();
            return Cache::insert('userInfo_'.Session::Uid(),json_encode($row),(60*60*24*365));
        }
        return Cache::insert('userInfo_'.Session::Uid(),json_encode($data),(60*60*24*365));
    }
}