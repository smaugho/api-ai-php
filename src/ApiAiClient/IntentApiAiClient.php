<?php

namespace ApiAi\ApiAiClient;

/**
 * Class IntentApiAiClient
 *
 * @package ApiAiClient
 */
class IntentApiAiClient extends ApiAiClient
{
    /**
     * @var string $clientKey
     *
     * IntentApiAiClient constructor.
     */
    public function __construct($clientKey)
    {
        parent::__construct($clientKey, 'intents');
    }


}
