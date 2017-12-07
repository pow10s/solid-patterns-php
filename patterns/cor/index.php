<?php
require_once ('DocParser.php');
require_once ('DocParserProcessor.php');

$files = [
    'file.txt',
    'file.json',
    'file.xml',
    'file.csv',
    'file.doc',
];
DocParserProcessor::run($files);
