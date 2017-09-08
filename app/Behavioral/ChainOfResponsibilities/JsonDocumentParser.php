<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibilities;

/**
 * Class JsonDocumentParser
 * @package Behavioral\ChainOfResponsibilities
 */
class JsonDocumentParser extends DocumentParser
{
    /**
     * @var string
     */
    private $extension = 'json';

    /**
     * @param $fileName
     *
     * @return bool
     */
    public function parse($fileName)
    {
        if ($this->canHandleFile($fileName, $this->extension)) {
            print("A JSON parser is handling the file: {$fileName}\n");
        } else {
            parent::parse($fileName);
        }
    }
}
