<?php

namespace ApiAi\Model;

/**
 * Class Fulfillment
 *
 * @package ApiAi\Model
 */
class Fulfillment extends Base
{
    /**
     * @return string
     */
    public function getSpeech()
    {
        return parent::get('speech');
    }

    public function setSpeech($speech)
    {
        parent::add("speech", $speech);
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return parent::get('source');
    }

    public function setSource($source)
    {
        parent::add("source", $source);
    }

    /**
     * @return string
     */
    public function getDisplayText()
    {
        return parent::get('displayText');
    }

    public function setDisplayText($displayText) {
        parent::add("displayText", $displayText);
    }

    /**
     * @return array
     */
    public function getData()
    {
        return parent::get('data', []);
    }

    public function setData($data) {
        parent::add("data", $data);
    }

    /**
     * @return array
     */
    public function getMessages()
    {
        return parent::get('messages', []);
    }

    public function setMessages($messages)
    {
        parent::add('messages', $messages);
    }

    /**
     * @return array
     */
    public function getContextOut()
    {
        return parent::get('contextOut');
    }

    public function setContextOut($contextOut) {
        parent::add("contextOut", $contextOut);
    }

}
