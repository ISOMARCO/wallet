<?php 

class categoryM extends Model 
{
    public static function getAllCategoryByUser($type=NULL)
    {
        $query = DB::select('Uid','Name')->where('User',Session::Uid());
        if($type != NULL) $query->where('Type',strtoupper($type));
        return $query->where('Active','1')->Category()->result();
    }
    public static function addCategory($data=[],$parentCategory=NULL)
    {
        return DB::transaction(function() use($data,$parentCategory){
            
            DB::insert('Category',[
                'Uid' => 'ABC',
                'Name' => $data['Name'],
                'Type' => 'MAIN'
                'User' => Session::Uid()
            ]);
            
        });
    }
}
