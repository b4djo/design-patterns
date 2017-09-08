<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibilities;

/**
 * Class XmlDocumentParser
 * @package Behavioral\ChainOfResponsibilities
 */
class XmlDocumentParser extends DocumentParser
{
    /**
     * @var string
     */
    private $extension = 'xml';

    /**
     * @param $fileName
     *
     * @return bool
     */
    public function parse($fileName)
    {
        if ($this->canHandleFile($fileName, $this->extension)) {
            print("A XML parser is handling the file: {$fileName}\n");
        } else {
            parent::parse($fileName);
        }
    }
}
