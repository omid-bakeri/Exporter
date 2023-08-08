<?php


// Rule
interface Exportable{
    public function export();
}

abstract class Exporter implements Exportable{

}
