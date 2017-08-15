<?php

namespace ApiAi\ApiAiClient;

use ApiAi\ApiAiClient\ApiAiClient;

/**
 * Class IntentApiAiClient
 *
 * @package IntentApiAiClient
 */
class IntentApiAiClient extends ApiAiClient
{
    /**
     * @var string
     */
     private $apiFullUriEndPoint;

    /**
     * ApiAiClient constructor.
     */
    public function __construct()
    {
        parent::__construct('', '/intents');
    }
}
