<?php

namespace LanguageServerProtocol;

class InitializeResult
{
    /**
     * The capabilities the language server provides.
     *
     * @var ServerCapabilities
     */
    public $capabilities;

    /**
	 * Information about the server.
	 *
	 * @since 3.15.0
     *
     * @var InitializeResultServerInfo|null
	 */
	public $serverInfo;

    /**
     * @param ServerCapabilities $capabilities
     */
    public function __construct(ServerCapabilities $capabilities, InitializeResultServerInfo $serverInfo = null)
    {
        $this->capabilities = $capabilities;
        $this->serverInfo = $serverInfo;
    }
}
