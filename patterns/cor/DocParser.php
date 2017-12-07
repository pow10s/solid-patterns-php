<?php
/**
 * Created by PhpStorm.
 * User: stosdima
 * Date: 07.12.17
 * Time: 18:30
 */

abstract class DocParser
{
    /**
     * @var DocParser|null
     */
    private $successor;

    /**
     * DocParser constructor.
     * @param DocParser $successor
     */
    public function __construct(DocParser $successor = null)
    {
        $this->successor = $successor;
    }

    /**
     * @param string $fileName
     */
    public function parse(string $fileName)
    {
        $successor = $this->getSuccessor();
        if($successor) {
            $successor->parse($fileName);
        } else {
            print("Unable to find the correct parser for the file: {$fileName}\n");
        }
    }

    public function getSuccessor()
    {
        return $this->successor;
    }

    public function canHandleFile(string $fileName, string $format): bool
    {
        if($fileName) {
            $extension = strtolower(pathinfo($fileName,PATHINFO_EXTENSION));

            if($extension == $format) {
                return true;
            }
        }
        return false;
    }
}