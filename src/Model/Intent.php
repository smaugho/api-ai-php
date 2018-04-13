<?php

namespace ApiAi\Model;

/**
 * Class Intent
 *
 * @package ApiAi\Model
 */
class Intent extends Base
{
	/**
     * Intent constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {

		if (!empty($data['contextIn'])) {
            foreach ($data['contextIn'] as $key => $value) {
                $data['contextIn'][$key] = $value;
            }
        }
		
		if (!empty($data['contextOut'])) {
            foreach ($data['contextOut'] as $key => $context) {
                $data['contextOut'][$key] = new Context($context);
            }
        }

        if (!empty($data['userSays'])) {
            foreach ($data['userSays'] as $key => $value) {
                $data['userSays'][$key] = new UserSay($value);
            }
        }

        if (!empty($data['parameters'])) {
            foreach ($data['parameters'] as $key => $value) {
                $data['parameters'][$key] = new Parameter($value);
            }
        }

		if (!empty($data['actions'])) {
            foreach ($data['actions'] as $key => $value) {
                $data['actions'][$key] = $value;
            }
        }
		
        parent::__construct($data);
    }
	
	
	/**
     * @return integer
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
     * @return array
     */
    public function getContextIn()
    {
        return parent::get('contextIn', []);
    }

    /**
     * @return array|Parameter[]
     */
    public function getParameters()
    {
        return parent::get('parameters', []);
    }

	/**
     * @return array|Context[]
     */
    public function getContexts()
    {
        return parent::get('contextOut', []);
    }

    /**
     * @return array|UserSay[]
     */
    public function getUserSays()
    {
        return parent::get('userSays', []);
    }

	/**
     * @return array
     */
    public function getActions()
    {
        return parent::get('actions', []);
    }
	
	/**
     * @return integer
     */
    public function getPriority()
    {
        return parent::get('priority');
    }
	
	/**
     * @return bool
     */
    public function getFallbackIntent()
    {
        return parent::get('fallbackIntent');
    }
	
	/**
     * @return Context
     */
    public function getContext($name) {
        foreach ($this->getContexts() as $context) {
            if ($context->getName() == $name) {
                return $name;
            }
        }

        return null;
    }

}
