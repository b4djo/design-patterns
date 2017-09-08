<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibilities;

use Exception;

/**
 * Class DocumentParser
 * @package Behavioral\ChainOfResponsibilities
 */
abstract class DocumentParser
{
    /**
     * @var DocumentParser
     */
    protected $successor;

    protected $statuses = [];

    /**
     * DocumentParser constructor.
     *
     * @param DocumentParser|null $successor
     */
    public function __construct($successor = null)
    {
        $this->successor = $successor;
    }

    /**
     * @param $fileName
     *
     * @throws Exception
     */
    public function parse($fileName)
    {
        $successor = $this->getSuccessor();
        if (!is_null($successor)) {
            $successor->parse($fileName);
        } else {
            print("Unable to find the correct parser for the file: {$fileName}\n");
            //throw new Exception("Unable to find the correct parser for the file: {$fileName}");
        }

        return 'asd';
    }

    /**
     * @return DocumentParser
     */
    public function getSuccessor()/*: DocumentParser*/
    {
        return $this->successor;
    }

    /**
     * @param $fileName
     * @param $format
     *
     * @return bool
     */
    public function canHandleFile($fileName, $format)
    {
        if ($fileName) {
            $extension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

            if ($extension == $format) {
                return true;
            }
        }

        return false;
    }
}
