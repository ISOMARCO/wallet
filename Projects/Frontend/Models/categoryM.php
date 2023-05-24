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
        $uid = uniqid(uniqid().'_');
        return DB::transaction(function(){
            DB::insert('Category',[
                'Uid' => $uid,
                'Name' => $data['Name'],
                'Type' => $data['Type'],
                'User' => Session::Uid()
            ]);
            if($category != NULL)
            {
                DB::insert('Sub_Category',[
                    'Uid' => uniqid(uniqid().'_'),
                    'Category_Uid' => $uid,
                    'ParentUid' => $uid,
                    'Child_Uid' => NULL,
                    'User' => Session::Uid()
                ]);
            }
        });
    }
}
