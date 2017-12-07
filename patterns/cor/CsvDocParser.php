<?php
class CsvDocParser extends DocParser
{
    public function parse(string $fileName)
    {
        if ($this->canHandleFile($fileName, 'csv')) {
            print ("A CSV parser is handling the file: {$fileName}\n");
        } else {
            parent::parse($fileName);
        }
    }
}