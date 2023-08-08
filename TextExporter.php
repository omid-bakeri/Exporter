<?php

include 'Exporter.php';

class TextExporter extends Exporter{
    protected $format = 'txt';
    public function export()
    {
        $file_name = "files/text_file".rand(10 , 99). "." . $this->format;
        file_put_contents($file_name , "{$this->data['title']} \n {$this->data['content']}");
    }
}
$textExporter = new TextExporter(['title'=>'Andres' ,'content'=>'Directory']);
$textExporter->export();