<?php

namespace ApiAi\Model;

/**
 * Class UserSay
 *
 * @package ApiAi\Model
 */
class UserSay extends Base
{

    public function __construct($data = [])
    {

        if (!empty($data['data'])) {

            foreach ($data['data'] as $key => $value) {
                $data['data'][$key] = new UserSayData($value);
            }

        }

        parent::__construct($data);
    }

    /**
     * @return bool
     */
    public function isTemplate()
    {
        return parent::get('isTemplate');
    }

	/**
     * @return string
     */
    public function getCount()
    {
        return parent::get('count');
    }

    /**
     * @return array|UserSayData[]
     */
    public function getData()
    {
        return parent::get('data');
    }

}
