<?php
namespace Midgard\CreatePHP\tests;

use Midgard\CreatePHP\RdfMapperInterface;
use Midgard\CreatePHP\Type\TypeInterface;
use Midgard\CreatePHP\Entity\PropertyInterface;

/**
 * Mock RdfMapper implementation for unittests
 */
class MockMapper implements RdfMapperInterface
{
    public function setPropertyValue($object, PropertyInterface $node, $value)
    {

    }

    public function getPropertyValue($object, PropertyInterface $node)
    {
        if (isset($object[$node->getIdentifier()]))
        {
            return $object[$node->getIdentifier()];
        }
        return null;
    }

    public function isEditable($object)
    {
        return true;
    }

    public function getChildren($object, array $config)
    {

    }

    public function prepareObject(TypeInterface $controller, $parent = null)
    {

    }

    public function store($object)
    {

    }

    public function getByIdentifier($identifier)
    {

    }

    public function createIdentifier($object)
    {
        if (isset($object['id']))
        {
            return $object['id'];
        }
        return '';
    }
}
?>