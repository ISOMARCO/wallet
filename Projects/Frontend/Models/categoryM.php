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
            $uid = uniqid(uniqid().'_');
            $type = 'MAIN';
            if($parentCategory != NULL) $type = 'SUB'; 
            return DB::insert('Category',[
                'Uid' => $uid,
                'Name' => $data['Name'],
                'Type' => $type,
                'User' => Session::Uid()
            ]);
            if($parentCategory != NULL)
            {
                DB::insert('Sub_Category',[
                    'Uid' => uniqid(uniqid().'_'),
                    'Category_Uid' => $parentCategory,
                    'ParentUid' => $parentCategory,
                    'Child_Uid' => $uid,
                    'User' => Session::Uid()
                ]);
            }
        });
    }
}
