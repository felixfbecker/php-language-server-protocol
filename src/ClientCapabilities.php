<?php

namespace LanguageServerProtocol;

class ClientCapabilities implements \JsonSerializable
{
    /**
     * The client supports workspace/xfiles requests
     *
     * @var bool|null
     */
    public $xfilesProvider;

    /**
     * The client supports textDocument/xcontent requests
     *
     * @var bool|null
     */
    public $xcontentProvider;

    /**
     * The client supports xcache/* requests
     *
     * @var bool|null
     */
    public $xcacheProvider;

    public function __construct(bool $xfilesProvider = null, bool $xcontentProvider = null, bool $xcacheProvider = null)
    {
        $this->xfilesProvider = $xfilesProvider;
        $this->xcontentProvider = $xcontentProvider;
        $this->xcacheProvider = $xcacheProvider;
    }

    /**
     * Only serialize properties with valid values.
     *
     * @return object
     */
    public function jsonSerialize()
    {
        $fields = new \stdClass;

        foreach (get_object_vars($this) as $name => $value) {
            if ($value !== null) {
                $fields->$name = $value;
            }
        }

        return $fields;
    }
}
