<?php

namespace Bitrix\Main\Web;

/**
 * Cookie - класс для работы с файлами cookie.

 * Аналоги в старом ядре:
 * CMain::set_cookie - для создания,
 * CMain::get_cookie - для получения.
 *
 * В ядре D7 cookie задавать нужно через класс Bitrix\Main\HttpResponse, получать их нужно через класс Bitrix\Main\HttpRequest.
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/web/cookie/index.php
 */
class Cookie
{
    const SPREAD_SITES = 1;
    const SPREAD_DOMAIN = 2;

    /**
     * Cookie constructor.
     *
     * @param string $name The cooke name
     * @param string|null $value The cooke value
     * @param integer $expires Timestamp
     * @param boolean $addPrefix Name prefix, usually BITRIX_SM_
     * @return void
     */
    public function __construct(
        string $name,
        ?string $value,
        ?int $expires = null,
        bool $addPrefix = true
    ): void { }

    /**
     * Undocumented function
     *
     * @param string $domain
     * @return $this
     */
    public function setDomain(string $domain): self
    {
        return $this;
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function getDomain(): string
    {
        return '';
    }

    /**
     * Undocumented function
     *
     * @param integer $expires
     * @return $this
     */
    public function setExpires(int $expires): self
    {
        return $this;
    }

    /**
     * Undocumented function
     *
     * @return integer
     */
    public function getExpires(): int
    {
        return 0;
    }

    /**
     * Undocumented function
     *
     * @param boolean $httpOnly
     * @return $this
     */
    public function setHttpOnly(bool $httpOnly): self
    {
        return $this;
    }

    /**
     * Undocumented function
     *
     * @return boolean
     */
    public function getHttpOnly(): bool
    {
        return false;
    }

    /**
     * Undocumented function
     *
     * @param string $name
     * @return $this
     */
    public function setName(string $name): self
    {
        return $this;
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function getName(): string
    {
        return '';
    }

    /**
     * Undocumented function
     *
     * @param string $path
     * @return $this
     */
    public function setPath(string $path): self
    {
        return $this;
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function getPath(): string
    {
        return '';
    }

    /**
     * Undocumented function
     *
     * @param boolean $secure
     * @return self
     */
    public function setSecure(bool $secure): self
    {
        return $this;
    }

    /**
     * Undocumented function
     *
     * @return boolean
     */
    public function getSecure(): bool
    {
        return false;
    }

    /**
     * Undocumented function
     *
     * @param string|null $value
     * @return self
     */
    public function setValue(?string $value): self
    {
        return $this;
    }

    /**
     * Undocumented function
     *
     * @return string|null
     */
    public function getValue(): ?string
    {
        return '';
    }

    /**
     * Undocumented function
     *
     * @param static::SPREAD_DOMAIN|static::SPREAD_SITES $spread
     * @return self
     */
    public function setSpread(int $spread): self
    {
        return $this;
    }

    /**
     * Undocumented function
     *
     * @return static::SPREAD_DOMAIN|static::SPREAD_SITES
     */
    public function getSpread(): int
    {
        return static::SPREAD_SITES;
    }

    /**
     * Returns the domain from the sites settings to use with cookies.
     *
     * @return string
     * @throws \Bitrix\Main\Db\SqlQueryException
     * @throws \Bitrix\Main\SystemException
     */
    public static function getCookieDomain()
    {
        return '';
    }
}
