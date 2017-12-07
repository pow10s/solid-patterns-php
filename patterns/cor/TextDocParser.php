<?php
/**
 * Created by PhpStorm.
 * User: stosdima
 * Date: 07.12.17
 * Time: 18:41
 */

class TextDocParser extends DocParser
{
    public function parse(string $fileName)
    {
        if ($this->canHandleFile($fileName, 'txt')) {
            print ("A TXT parser is handling the file: {$fileName}\n");
        } else {
            parent::parse($fileName);
        }
    }
}