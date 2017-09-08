<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibilities;

/**
 * Class DocumentParserProcessor
 * @package Behavioral\ChainOfResponsibilities
 */
class DocumentParserProcessor
{
    /**
     * @param array $files
     */
    public static function run(array $files)
    {
        $xmlParser  = new XmlDocumentParser();
        $jsonParser = new JsonDocumentParser($xmlParser);
        $csvParser  = new CsvDocumentParser($jsonParser);
        $textParser = new TextDocumentParser($csvParser);

        foreach ($files as $file) {
            $textParser->parse($file);
        }
    }
}
