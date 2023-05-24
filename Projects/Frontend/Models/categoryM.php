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
        return DB::transaction(function(){
            $uid = uniqid(uniqid().'_');
            $type = 'MAIN';
            #if($parentCategory != NULL) $type = 'SUB'; 
            DB::insert('Category',[
                'Uid' => $uid,
                'Name' => $data['Name'],
                'Type' => $type,
                'User' => Session::Uid()
            ]);
            if($parentCategory != NULL)
            {
                DB::insert('Sub_Category',[
                    'Uid' => uniqid(uniqid().'_'),
                    'Category_Uid' => NULL,
                    'ParentUid' => NULL,
                    'Child_Uid' => $uid,
                    'User' => Session::Uid()
                ]);
            }
        });
    }
}
