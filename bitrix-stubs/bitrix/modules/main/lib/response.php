<?php

namespace Bitrix\Main;

abstract class Response
{
    /**
     * Undocumented function
     *
     * @param string $text
     * @return void
     */
    public function flush(string $text = ''): void
    { }

    /**
     * Sets content.
     * Valid types are strings, numbers, null, and objects that implement a __toString() method.
     *
     * @param mixed $content Content that can be cast to string.
     *
     * @return $this
     * @throws ArgumentTypeException
     */
    public function setContent($content): self
    {
        return $this;
    }

    /**
     * Returns content of response.
     *
     * @return string
     */
    public function getContent(): string
    {
        return '';
    }

    /**
     * Sends content to the output.
     *
     * @return void
     */
    public function send(): void
    { }
}
