<?php

namespace library\AnodocLib;

use library\AnodocLib\ClassDoc\InvalidAttributeDoc;
use library\AnodocLib\ClassDoc\InvalidMethodDoc;

class ClassDoc
{

    private $className;
    private $classDoc;
    private $methodDocs = array();
    private $attributeDocs = array();

    public function __construct(
        $className,
        DocComment $classDoc,
        array $methodDocs = array(),
        array $attributeDocs = array()
    ) {
        $this->className = $className;
        $this->classDoc = $classDoc;
        foreach ($methodDocs as $methodName => $docComment) {
            $this->setMethodDoc($methodName, $docComment);
        }
        foreach ($attributeDocs as $attribute => $docComment) {
            $this->setAttributeDoc($attribute, $docComment);
        }
    }

    private function setMethodDoc($methodName, $docComment)
    {
        if ($docComment instanceof DocComment) {
            $this->methodDocs[$methodName] = $docComment;
        } else {
            throw new InvalidMethodDoc("'$methodName' is not a valid method doc.");
        }
    }

    private function setAttributeDoc($attribute, $docComment)
    {
        if ($docComment instanceof DocComment) {
            $this->attributeDocs[$attribute] = $docComment;
        } else {
            throw new InvalidAttributeDoc(
                "'$attribute' is not a valid attribute doc."
            );
        }
    }

    public function getClassName()
    {
        return $this->className;
    }

    public function getMainDoc()
    {
        return $this->classDoc;
    }

    public function getMethodDoc($method)
    {
        return $this->getItemDoc($this->methodDocs, $method);
    }

    public function getAttributeDoc($attribute)
    {
        return $this->getItemDoc($this->attributeDocs, $attribute);
    }

    private function getItemDoc($collection, $key)
    {
        if (isset($collection[$key])) {
            return $collection[$key];
        }
        return new NullDocComment();
    }
}
