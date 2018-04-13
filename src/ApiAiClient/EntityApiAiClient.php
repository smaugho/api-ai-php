<?php

namespace ApiAi\ApiAiClient;

use Psr\Http\Message\ResponseInterface;

/**
 * Class EntityApiAiClient
 *
 * @package ApiAiClient
 */
class EntityApiAiClient extends ApiAiClient
{
    /**
     * @var string $clientKey
     *
     * EntityApiAiClient constructor.
     */
    public function __construct($clientKey)
    {
        parent::__construct($clientKey, 'entities');
    }

}
