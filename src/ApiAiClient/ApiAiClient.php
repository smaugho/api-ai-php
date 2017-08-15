<?php

namespace ApiAi\ApiAiClient;

use ApiAi\Client;

/**
 * Class ApiAiClient
 *
 * @package ApiAiClient
 */
class ApiAiClient extends Client
{
    /**
     * @var array
     */
    public static $allowedMethod = ['GET', 'POST', 'PUT', 'DELETE'];

    /**
     * @var string
     */
     private $apiFullUriEndPoint;

    /**
     * ApiAiClient constructor.
     *
     * @param string $accessToken
     * @param HttpClient|null $httpClient
     * @param string $apiLanguage
     * @param string $apiVersion
     * @param string $apiEndPoint
     */
    public function __construct($accessToken, $apiEndPoint = '', HttpClient $httpClient = null, 
                    $apiLanguage = self::DEFAULT_API_LANGUAGE, $apiVersion = self::DEFAULT_API_VERSION)
    {
        parent::__construct($accessToken);
        $this->apiFullUriEndPoint = self::API_BASE_URI + self::DEFAULT_API_ENDPOINT + $apiEndPoint;
    }

    /**
     * @return ResponseInterface
     */
    public function getAll() {
        return $this->get($this->apiFullUriEndPoint);
    }
    
    /**
     * @param int $id 
     *
     * @return ResponseInterface
     */
    public function getOne($id = 0) {
        return $this->get($this->apiFullUriEndPoint . '/' . $id );
    }

    /**
     * @param array $params
     *
     * @return ResponseInterface
     */
     public function create(array $params = [])
     {
         return $this->post($this->apiFullUriEndPoint, $params);
     }

     /**
     * @param int $id
     * @param array $params
     *
     * @return ResponseInterface
     */
     public function updateAll( array $params = [])
     {
         return $this->put($this->apiFullUriEndPoint, $params);
     }

     /**
     * @param int $id
     * @param array $params
     *
     * @return ResponseInterface
     */
     public function updateOne($id = 0, array $params = [])
     {
         return $this->put($this->apiFullUriEndPoint . '/' . $id, $params);
     }

     /**
     * @param int $id
     *
     * @return ResponseInterface
     */
     public function deleteOne($id = 0)
     {
         return $this->delete($this->apiFullUriEndPoint);
     }

    /**
     * @param string $uri
     * @param array $params
     *
     * @return ResponseInterface
     */
     public function put($uri, array $params = [])
     {
         return $this->send('PUT', $uri, $params);
     }

     /**
     * @param string $uri
     * @param array $params
     *
     * @return ResponseInterface
     */
    public function delete($uri, array $params = [])
    {
        return $this->send('DELETE', $uri, null, $params);
    }
}
