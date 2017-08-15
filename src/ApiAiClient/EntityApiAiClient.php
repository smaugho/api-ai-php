<?php

namespace ApiAi\ApiAiClient;

use ApiAi\ApiAiClient\ApiAiClient;

/**
 * Class EntityApiAiClient
 *
 * @package EntityApiAiClient
 */
class EntityApiAiClient extends ApiAiClient
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
        parent::__construct('', '/entities');
    }

    /**
     * @param array $params
     *
     * @return ResponseInterface
     */
     public function createEntries(array $params = [])
     {
         return $this->post($this->apiFullUriEndPoint . '/entries', $params);
     }

     /**
     * @param int $id
     * @param array $params
     *
     * @return ResponseInterface
     */
     public function updateEntries($id = 0, array $params = [])
     {
         return $this->put($this->apiFullUriEndPoint . "/$id/entries", $params);
     }

     /**
     * @param int $id
     *
     * @return ResponseInterface
     */
     public function deleteEntries($id = 0)
     {
         return $this->delete($this->apiFullUriEndPoint . "/$id/entries");
     }

}
