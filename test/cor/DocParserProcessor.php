<?php
/**
 * Created by PhpStorm.
 * User: stosdima
 * Date: 07.12.17
 * Time: 18:42
 */
require_once('CsvDocParser.php');
require_once('JsonDocParser.php');
require_once('TextDocParser.php');
require_once('XmlDocParser.php');

class DocParserProcessor
{
    public static function run($files)
    {
        $xmlParser  = new XmlDocParser();
        $jsonParser = new JsonDocParser($xmlParser);
        $csvParser  = new CsvDocParser($jsonParser);
        $textParser = new TextDocParser($csvParser);

        if (is_array($files)) {
            foreach ($files as $file) {
                $textParser->parse($file);
            }
        } else {
            $textParser->parse($files);
        }
    }

}