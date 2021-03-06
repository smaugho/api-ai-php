<?php

namespace ApiAi\ApiAiClient;

use ApiAi\Client;
use Psr\Http\Message\ResponseInterface;

/**
 * Class ApiAiClient
 *
 * @package ApiAiClient
 */
class ApiAiClient extends Client
{

    /**
     * @var string
     */
     protected $apiFullUriEndPoint;

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
        $this->apiFullUriEndPoint = self::API_BASE_URI . self::DEFAULT_API_ENDPOINT . $apiEndPoint;
        self::$allowedMethod = ['GET', 'POST', 'PUT', 'DELETE'];
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
         return $this->delete($this->apiFullUriEndPoint . "/$id");
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
    protected function delete($uri, array $params = [])
    {
        return $this->send('DELETE', $uri, null, $params);
    }
}
