<?php


// Rule
interface Exportable{
    public function export();
}

abstract class Exporter implements Exportable{
    protected $data;
    protected $format;


    public function Validation(){
        foreach ($this->data as $field){
            if(empty($field)){
                return false;
            }
        }
        return true;
    }
    public function __construct($data)
    {
        $this->data = $data;
    }
}