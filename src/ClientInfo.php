<?php

namespace LanguageServerProtocol;

class ClientInfo
{
    /**
     * The name of the client as defined by the client.
     *
     * @var string
     */
    public $name;

    /**
     * The client's version as defined by the client.
     *
     * @var string|null
     */
    public $version;
}
