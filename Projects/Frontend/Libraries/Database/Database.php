<?php 

class InternalDatabase 
{
    public $a = NULL;
    public function __construct()
    {
        $this->a = 'okey';
    }
    public function main()
    {
        return 'main '.$this->a;
    }
}