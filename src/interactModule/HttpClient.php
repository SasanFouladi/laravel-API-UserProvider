<?php

namespace Amin3536\LaravelApiUserProvider\interactModule;

use phpDocumentor\Reflection\Types\Void_;

interface HttpClient
{
    public const METHOD_HEAD = 'HEAD';
    public const METHOD_GET = 'GET';
    public const METHOD_POST = 'POST';
    public const METHOD_PUT = 'PUT';
    public const METHOD_PATCH = 'PATCH';
    public const METHOD_DELETE = 'DELETE';
    public const METHOD_PURGE = 'PURGE';
    public const METHOD_OPTIONS = 'OPTIONS';
    public const METHOD_TRACE = 'TRACE';
    public const METHOD_CONNECT = 'CONNECT';

    /**
     * HttpClient constructor.
     *
     * @param  string  $baseUrl
     */
    public function __construct($baseUrl, $timeout);

    /**
     * Send request function.
     *
     * @return mixed
     */
    public function sendRequest();

    /**
     * Set client function.
     *
     * @param $client
     * @return Void_
     */
    public function setClient($client);

    /**
     * Create request function.
     *
     * @param $uri
     * @param string $method
     * @param array $headers
     * @param null $body
     * @param array $options
     * @return HttpClient
     */
    public function createRequest(
        $uri,
        $method = self::METHOD_GET,
        array $headers = [],
        $body = null,
        array $options = []
    ): HttpClient;
}
