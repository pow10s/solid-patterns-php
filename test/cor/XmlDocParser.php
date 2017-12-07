<?php
/**
 * Created by PhpStorm.
 * User: stosdima
 * Date: 07.12.17
 * Time: 18:45
 */

class XmlDocParser extends DocParser
{
    public function parse(string $fileName)
    {
        if ($this->canHandleFile($fileName, 'xml')) {
            print ("A XML parser is handling the file: {$fileName}\n");
        } else {
            parent::parse($fileName);
        }
    }
}