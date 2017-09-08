<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibilities;

/**
 * Class TextDocumentParser
 * @package Behavioral\ChainOfResponsibilities
 */
class TextDocumentParser extends DocumentParser
{
    /**
     * @var string
     */
    private $extension = 'txt';

    /**
     * @param $fileName
     *
     * @return bool
     */
    public function parse($fileName)
    {
        if ($this->canHandleFile($fileName, $this->extension)) {
            print("A TEXT parser is handling the file: {$fileName}\n");
        } else {
            parent::parse($fileName);
        }
    }
}
