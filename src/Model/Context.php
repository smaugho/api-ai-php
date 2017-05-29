<?php

namespace ApiAi\Model;

/**
 * Class Context
 *
 * @package ApiAi\Model
 */
class Context extends Base
{
    /**
     * @return string
     */
    public function getName()
    {
        return parent::get('name');
    }

    public function setName($name) {
        parent::add("name", $name);
    }

    /**
     * @return array
     */
    public function getParameters()
    {
        return parent::get('parameters', []);
    }

    public function setData($parameters) {
        parent::add("parameters", $parameters);
    }

    /**
     * @return integer
     */
    public function getLifespan()
    {
        return parent::get('lifespan');
    }

    public function setLifespan($lifespan) {
        parent::add("lifespan", $lifespan);
    }

}
