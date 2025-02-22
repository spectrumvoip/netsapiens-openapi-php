<?php
/**
 * TimeframesDomainSharedAlwaysApi
 * PHP version 7.4
 *
 * @category Class
 * @package  SpectrumVoip\\\\NetSapiens
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * NetSapiens API v2
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SpectrumVoip\\\\NetSapiens\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use SpectrumVoip\\\\NetSapiens\ApiException;
use SpectrumVoip\\\\NetSapiens\Configuration;
use SpectrumVoip\\\\NetSapiens\HeaderSelector;
use SpectrumVoip\\\\NetSapiens\ObjectSerializer;

/**
 * TimeframesDomainSharedAlwaysApi Class Doc Comment
 *
 * @category Class
 * @package  SpectrumVoip\\\\NetSapiens
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TimeframesDomainSharedAlwaysApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'domainsDomainTimeframesPost' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation domainsDomainTimeframesPost
     *
     * Create Always Timeframe
     *
     * @param  string $domain  (required)
     * @param  \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesPostRequest $domains_domain_timeframes_post_request domains_domain_timeframes_post_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['domainsDomainTimeframesPost'] to see the possible values for this operation
     *
     * @throws \SpectrumVoip\\\\NetSapiens\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return object|\SpectrumVoip\\\\NetSapiens\Model\ErrorResponse|\SpectrumVoip\\\\NetSapiens\Model\ErrorResponse|\SpectrumVoip\\\\NetSapiens\Model\ErrorResponse
     */
    public function domainsDomainTimeframesPost($domain, $domains_domain_timeframes_post_request = null, string $contentType = self::contentTypes['domainsDomainTimeframesPost'][0])
    {
        list($response) = $this->domainsDomainTimeframesPostWithHttpInfo($domain, $domains_domain_timeframes_post_request, $contentType);
        return $response;
    }

    /**
     * Operation domainsDomainTimeframesPostWithHttpInfo
     *
     * Create Always Timeframe
     *
     * @param  string $domain  (required)
     * @param  \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesPostRequest $domains_domain_timeframes_post_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['domainsDomainTimeframesPost'] to see the possible values for this operation
     *
     * @throws \SpectrumVoip\\\\NetSapiens\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of object|\SpectrumVoip\\\\NetSapiens\Model\ErrorResponse|\SpectrumVoip\\\\NetSapiens\Model\ErrorResponse|\SpectrumVoip\\\\NetSapiens\Model\ErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function domainsDomainTimeframesPostWithHttpInfo($domain, $domains_domain_timeframes_post_request = null, string $contentType = self::contentTypes['domainsDomainTimeframesPost'][0])
    {
        $request = $this->domainsDomainTimeframesPostRequest($domain, $domains_domain_timeframes_post_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 202:
                    if ('object' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('object' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\SpectrumVoip\\\\NetSapiens\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\SpectrumVoip\\\\NetSapiens\Model\ErrorResponse' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SpectrumVoip\\\\NetSapiens\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\SpectrumVoip\\\\NetSapiens\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\SpectrumVoip\\\\NetSapiens\Model\ErrorResponse' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SpectrumVoip\\\\NetSapiens\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\SpectrumVoip\\\\NetSapiens\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\SpectrumVoip\\\\NetSapiens\Model\ErrorResponse' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SpectrumVoip\\\\NetSapiens\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            $returnType = 'object';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 202:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SpectrumVoip\\\\NetSapiens\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SpectrumVoip\\\\NetSapiens\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SpectrumVoip\\\\NetSapiens\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation domainsDomainTimeframesPostAsync
     *
     * Create Always Timeframe
     *
     * @param  string $domain  (required)
     * @param  \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesPostRequest $domains_domain_timeframes_post_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['domainsDomainTimeframesPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function domainsDomainTimeframesPostAsync($domain, $domains_domain_timeframes_post_request = null, string $contentType = self::contentTypes['domainsDomainTimeframesPost'][0])
    {
        return $this->domainsDomainTimeframesPostAsyncWithHttpInfo($domain, $domains_domain_timeframes_post_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation domainsDomainTimeframesPostAsyncWithHttpInfo
     *
     * Create Always Timeframe
     *
     * @param  string $domain  (required)
     * @param  \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesPostRequest $domains_domain_timeframes_post_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['domainsDomainTimeframesPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function domainsDomainTimeframesPostAsyncWithHttpInfo($domain, $domains_domain_timeframes_post_request = null, string $contentType = self::contentTypes['domainsDomainTimeframesPost'][0])
    {
        $returnType = 'object';
        $request = $this->domainsDomainTimeframesPostRequest($domain, $domains_domain_timeframes_post_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'domainsDomainTimeframesPost'
     *
     * @param  string $domain  (required)
     * @param  \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesPostRequest $domains_domain_timeframes_post_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['domainsDomainTimeframesPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function domainsDomainTimeframesPostRequest($domain, $domains_domain_timeframes_post_request = null, string $contentType = self::contentTypes['domainsDomainTimeframesPost'][0])
    {

        // verify the required parameter 'domain' is set
        if ($domain === null || (is_array($domain) && count($domain) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $domain when calling domainsDomainTimeframesPost'
            );
        }
        if (strlen($domain) > 64) {
            throw new \InvalidArgumentException('invalid length for "$domain" when calling TimeframesDomainSharedAlwaysApi.domainsDomainTimeframesPost, must be smaller than or equal to 64.');
        }
        if (!preg_match("/^[A-Za-z0-9._-]*|~|\\*+/", $domain)) {
            throw new \InvalidArgumentException("invalid value for \"domain\" when calling TimeframesDomainSharedAlwaysApi.domainsDomainTimeframesPost, must conform to the pattern /^[A-Za-z0-9._-]*|~|\\*+/.");
        }
        


        $resourcePath = '/domains/{domain}/timeframes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($domain !== null) {
            $resourcePath = str_replace(
                '{' . 'domain' . '}',
                ObjectSerializer::toPathValue($domain),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($domains_domain_timeframes_post_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($domains_domain_timeframes_post_request));
            } else {
                $httpBody = $domains_domain_timeframes_post_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
