<?php

namespace LanguageServerProtocol;

class WorkspaceFolder
{
    /**
     * The associated URI for this workspace folder.
     *
     * @var string
     */
    public $uri;

    /**
     * The name of the workspace folder. Used to refer to this
     * workspace folder in the user interface.
     *
     * @var string
     */
    public $name;

    PUblic function __construct(
        string $uri,
        string $name
    ) {
        $this->uri = $uri;
        $this->name = $name;
    }
}
