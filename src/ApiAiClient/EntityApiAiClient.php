<?php

namespace ApiAi\ApiAiClient;

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

    /**
     * @param int $id
     * @param array $params
     *
     * @return ResponseInterface
     */
     public function createEntries($id, array $params = [])
     {
         return $this->post($this->apiFullUriEndPoint . "/$id/entries", $params);
     }

    /**
     * @param array $params
     *
     * @return ResponseInterface
     */
    public function updateAll(array $params = [])
    {
        return $this->put($this->apiFullUriEndPoint, $params);
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
