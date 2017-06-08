<?php

namespace ApiAi\Model;

/**
 * Class Parameter
 *
 * @package ApiAi\Model
 */
class Parameter extends Base
{
    /**
     * Intent constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
		if (!empty($data['prompts'])) {
            foreach ($data['prompts'] as $key => $value) {
                $data['prompts'][$key] = $value;
            }
        }
		
        parent::__construct($data);
    }
	
	/**
     * @return string
     */
    public function getName()
    {
        return parent::get('name');
    }
	
	/**
     * @return string
     */
    public function getValue()
    {
        return parent::get('value');
    }
	
	/**
     * @return string
     */
    public function getDefaultValue()
    {
        return parent::get('defaultValue');
    }

    /**
     * @return bool
     */
    public function getRequired()
    {
        return parent::get('required');
    }
	
	/**
     * @return string
     */
    public function getDataType()
    {
        return parent::get('dataType');
    }
	
	/**
     * @return array
     */
    public function getPrompts()
    {
        return parent::get('prompts');
    }

}
