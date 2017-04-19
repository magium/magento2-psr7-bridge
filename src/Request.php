<?php

namespace Magium\Magento2\Psr7Bridge;

use GuzzleHttp\Psr7\Request as Psr7Request;
use GuzzleHttp\Psr7\Uri;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\UriInterface;
use Magento\Framework\App\Request\Http as MagentoRequest;

class Request implements ServerRequestInterface
{
    protected $request;
    protected $psr7;

    public function __construct(
        MagentoRequest $request
    )
    {
        $this->request = $request;
        $this->psr7 = new Psr7Request(
            $this->request->getMethod(),
            $this->request->getUriString(),
            $this->request->getHeaders(),
            $this->request->getContent()
        );
    }

    public function getProtocolVersion()
    {
        return $this->psr7->getProtocolVersion();
    }

    public function withProtocolVersion($version)
    {
        $this->request->setVersion($version);
        $this->psr7->withProtocolVersion($version);
    }

    public function getHeaders()
    {
        return $this->request->getHeaders();
    }

    public function hasHeader($name)
    {
        return $this->request->getHeaders()->has($name);
    }

    public function getHeader($name)
    {
        return $this->request->getHeader($name)->getFieldValue();
    }

    public function getHeaderLine($name)
    {
        return $this->request->getHeader($name)->toString();
    }

    public function withHeader($name, $value)
    {
        $this->request->getHeaders()->addHeaderLine(sprintf('%s: %s', $name, $value));
        return $this;
    }

    public function withAddedHeader($name, $value)
    {
        // TODO: Implement withAddedHeader() method.
    }

    public function withoutHeader($name)
    {
        // TODO: Implement withoutHeader() method.
    }

    public function getBody()
    {
        return $this->request->getPost()->toString();
    }

    public function withBody(StreamInterface $body)
    {
        // TODO: Implement withBody() method.
    }

    public function getRequestTarget()
    {
        // TODO: Implement getRequestTarget() method.
    }

    public function withRequestTarget($requestTarget)
    {
        // TODO: Implement withRequestTarget() method.
    }

    public function getMethod()
    {
        return $this->request->getMethod();
    }

    public function withMethod($method)
    {
        $this->request->setMethod($method);
        return $this;
    }

    public function getUri()
    {
        return $this->psr7->getUri();
    }

    public function withUri(UriInterface $uri, $preserveHost = false)
    {
        // TODO: Implement withUri() method.
    }

    public function getServerParams()
    {
        // TODO: Implement getServerParams() method.
    }

    public function getCookieParams()
    {
        // TODO: Implement getCookieParams() method.
    }

    public function withCookieParams(array $cookies)
    {
        // TODO: Implement withCookieParams() method.
    }

    public function getQueryParams()
    {
        return $this->request->getParams();
    }

    public function withQueryParams(array $query)
    {
        $this->request->setParams($query);
        return $this;
    }

    public function getUploadedFiles()
    {
        // TODO: Implement getUploadedFiles() method.
    }

    public function withUploadedFiles(array $uploadedFiles)
    {
        // TODO: Implement withUploadedFiles() method.
    }

    public function getParsedBody()
    {
        // TODO: Implement getParsedBody() method.
    }

    public function withParsedBody($data)
    {
        // TODO: Implement withParsedBody() method.
    }

    public function getAttributes()
    {
        // TODO: Implement getAttributes() method.
    }

    public function getAttribute($name, $default = null)
    {
        // TODO: Implement getAttribute() method.
    }

    public function withAttribute($name, $value)
    {
        // TODO: Implement withAttribute() method.
    }

    public function withoutAttribute($name)
    {
        // TODO: Implement withoutAttribute() method.
    }

}
