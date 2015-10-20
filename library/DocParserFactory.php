<?php
namespace library;
/**
 * Class DocParserFactory 解析doc
 *
 * @example
 *      DocParserFactory::getInstance()->parse($doc);
 */
class DocParserFactory
{
    private static $p;

    private function __construct()
    {

    }

    public static function getInstance()
    {
        if (self::$p == null) {
            self::$p = new DocParser();
        }
        return self::$p;
    }

    private function __clone()
    {

    }
}
