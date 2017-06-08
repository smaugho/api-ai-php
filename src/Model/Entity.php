<?php

namespace ApiAi\Model;

/**
 * Class Entity
 *
 * @package ApiAi\Model
 */
class Entity extends Base
{
	/**
     * @return string
     */
    public function getId()
    {
        return parent::get('id');
    }

    /**
     * @return string
     */
    public function getName()
    {
        return parent::get('name');
    }

    /**
     * @return integer
     */
    public function getCount()
    {
        return parent::get('count');
    }

    /**
     * @return string
     */
    public function getPreview()
    {
        return parent::get('preview');
    }

}
