<?php
/**
 * Created by PhpStorm.
 * User: stosdima
 * Date: 07.12.17
 * Time: 18:40
 */

class JsonDocParser extends DocParser
{
    public function parse(string $fileName)
    {
        if ($this->canHandleFile($fileName, 'json')) {
            print ("A JSON parser is handling the file: {$fileName}\n");
        } else {
            parent::parse($fileName);
        }
    }
}