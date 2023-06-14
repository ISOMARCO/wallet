<?php 

class loginM extends Model
{
    public static function Info($uid)
    {
        $query = DB::select('Uid','Username','Name','Surname','Lang','Role')->where('Uid',Session::Uid())->Users();
        if($query->totalRows()) return $query->row();
        return NULL;
    }
    public static function login($email,$password,$rememberMe=false,$hash = true)
    {
        $userAgent = $_SERVER['HTTP_USER_AGENT'];
        if($hash === true) $password = hash('sha256',md5($password));
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
            }
            Session::insert('Uid',$row->Uid);
            self::makeUserCache($row);
            $session = DB::select('Id')->where('User_Agent', $userAgent)->where('User', Session::Uid())->Sessions()->totalRows();
            if(!$session)
            {
                DB::insert('Sessions', [
                    'Ip_Address' => getIpAddress(),
                    'User_Agent' => $userAgent,
                    'User' => Session::Uid()
                ]);
            }
            return $row;
        }
        return NULL;
    }
    public static function makeUserCache($data = NULL, $jsonEncode = true)
    {
        if($data == NULL)
        {
            $row = DB::select('Uid','Username','Name','Surname','Lang','Role')->
            where('Uid',Session::Uid())->
            Users()->row();
            return Cache::insert('userInfo_'.Session::Uid(),json_encode($row),(60*60*24*365));
        }
        if($jsonEncode === true) $data = json_encode($data);
        return Cache::insert('userInfo_'.Session::Uid(),$data,(60*60*24*365));
    }
    public static function logout($allDevices = FALSE)
    {
        Cookie::deleteAll();
        if(Cache::select('userInfo_'.Session::Uid()))
        {
            Cache::delete('userInfo_'.Session::Uid());
        }
        if($allDevices === TRUE)
        {
            DB::where('User', Session::Uid())->delete('Sessions');
        }
        else 
        {
            DB::where('User', Session::Uid())->where('User_Agent', $_SERVER['HTTP_USER_AGENT'])->delete('Sessions');
        }
        Session::deleteAll();
        return true;
    }
    public static function logoutFromAllDevices($user)
    {
        return DB::where('User', $user)->delete('Sessions');
    }
    public static function checkLogout() 
    {
        $session = DB::select('Id')->where('User', Session::Uid())->where('User_Agent', $_SERVER['HTTP_USER_AGENT'])->totalRows();
        if(!$session) return true;
        return false;
    }
}