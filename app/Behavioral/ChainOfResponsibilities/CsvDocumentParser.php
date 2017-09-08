<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibilities;

/**
 * Class CsvDocumentParser
 * @package Behavioral\ChainOfResponsibilities
 */
class CsvDocumentParser extends DocumentParser
{
    /**
     * @var string
     */
    private $extension = 'csv';

    /**
     * @param $fileName
     *
     * @return bool
     */
    public function parse($fileName)
    {
        if ($this->canHandleFile($fileName, $this->extension)) {
            print("A CSV parser is handling the file: {$fileName}\n");
        } else {
            parent::parse($fileName);
        }
    }
}
