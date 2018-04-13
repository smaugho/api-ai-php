<?php

namespace ApiAi\Model;

/**
 * Class UserSayData
 *
 * @package ApiAi\Model
 */
class UserSayData extends Base
{

	/**
     * @return string
     */
    public function getAlias()
    {
        return parent::get('alias');
    }

    /**
     * @return string
     */
    public function getMeta()
    {
        return parent::get('meta');
    }

    /**
     * @return string
     */
    public function getText()
    {
        return parent::get('text');
    }

    /**
     * @return bool
     */
    public function getUserDefined()
    {
        return parent::get('userDefined');
    }

}
