<?php

namespace Bitrix\Main;

use Bitrix\Main\Web;

class HttpResponse extends Response
{
    const STORE_COOKIE_NAME = "STORE_COOKIES";

    /**
     * Undocumented function
     *
     * @param string $text
     * @return void
     */
    public function flush(string $text = ''): void
    { }

    /**
     * Adds a HTTP header field to the response.
     *
     * @param string $name Header field name
     * @param string $value Header field value
     * @return $this
     * @throws ArgumentNullException
     */
    public function addHeader(string $name, string $value = ''): self
    {
        return $this;
    }

    /**
     * Sets a collection of HTTP headers.
     *
     * @param Web\HttpHeaders $headers Headers collection.
     *
     * @return $this
     */
    public function setHeaders(Web\HttpHeaders $headers): self
    {
        return $this;
    }

    /**
     * Adds a cookie to the response.
     *
     * @param Web\Cookie $cookie The cookie.
     * @param boolean $replace Replace an existing cookie or not.
     * @param boolean $checkExpires Check expires value of the cookie or not.
     * @return $this
     */
    public function addCookie(Web\Cookie $cookie, bool $replace = true, bool $checkExpires = true): self
    {
        return $this;
    }

    /**
     * Remembers user's choice about storing persistent cookies.
     *
     * @param boolean $mode
     */
    public function allowPersistentCookies(bool $mode)
    { }

    /**
     * @return Web\Cookie
     */
    public function getCookies(): Web\Cookie
    {
        return new Web\Cookie('', null);
    }

    /**
     * Undocumented function
     *
     * @return Web\HttpHeaders
     */
    public function getHeaders(): Web\HttpHeaders
    {
        return new Web\HttpHeaders();
    }

    /**
     * Sets the HTTP status of the response.
     *
     * @param string $status
     * @return $this
     * @throws ArgumentNullException
     * @throws ArgumentOutOfRangeException
     */
    public function setStatus(string $status): self
    {
        return $this;
    }

    /**
     * Returns the HTTP status of the response.
     *
     * @return int|string|null
     */
    public function getStatus()
    {
        return null;
    }

    /**
     * Sets the latest time for the Last-Modified header field.
     *
     * @param Type\DateTime $time
     * @return $this
     */
    public function setLastModified(Type\DateTime $time): self
    {
        return $this;
    }

    /**
     * Undocumented function
     *
     * @param callable $job
     * @param array $args
     * @return void
     */
    public function addBackgroundJob(callable $job, array $args = []): self
    {
        return $this;
    }
}
