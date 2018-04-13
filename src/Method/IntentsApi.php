<?php

namespace ApiAi\Method;


use ApiAi\ApiAiClient\ApiAiClient;
use ApiAi\Client;
use ApiAi\ResponseHandler;

class IntentsApi
{

    use ResponseHandler;

    /**
     * @var Client
     */
    private $client;

    /**
     * Query constructor.
     *
     * @param ApiAiClient $client
     */
    public function __construct(ApiAiClient $client)
    {
        $this->client = $client;
    }

    public function getAll() {
        $response = $this->client->getAll();
        return $this->decodeResponse($response);
    }

    public function get($id) {
        $response = $this->client->getOne($id);
        return $this->decodeResponse($response);
    }

    public function create($intentData) {
        $response = $this->client->create($intentData);
        return $this->decodeResponse($response);
    }

    public function update($id, $intentData) {
        $response = $this->client->updateOne($id, $intentData);
        return $this->decodeResponse($response);
    }

    public function delete($id) {
        $response = $this->client->deleteOne($id);
        return $this->decodeResponse($response);
    }

}