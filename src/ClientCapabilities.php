<?php

namespace LanguageServerProtocol;

class ClientCapabilities
{

    /**
     * Workspace specific client capabilities.
     *
     * @var ClientCapabilitiesWorkspace|null
     */
    public $workspace;

    /**
     * Text document specific client capabilities.
     *
     * @var TextDocumentClientCapabilities|null
     */
    public $textDocument;

    /**
     * Window specific client capabilities.
     *
     * @var ClientCapabilitiesWindow|null
     */
    public $window;

    /**
     * General client capabilities.
     *
     * @since 3.16.0
     *
     * @var ClientCapabilitiesGeneral|null
     */
    public $general;

    /**
     * Experimental client capabilities.
     *
     * @var mixed|null
     */
    public $experimental;

    /**
     * Undocumented function
     *
     * @param ClientCapabilitiesWorkspace|null $workspace
     * @param TextDocumentClientCapabilities|null $textDocument
     * @param ClientCapabilitiesWindow|null $window
     * @param ClientCapabilitiesGeneral|null $general
     * @param mixed|null $experimental
     */
    public function __construct(
        ClientCapabilitiesWorkspace $workspace = null,
        TextDocumentClientCapabilities $textDocument = null,
        ClientCapabilitiesWindow $window = null,
        ClientCapabilitiesGeneral $general = null,
        $experimental = null
    ) {
        $this->workspace = $workspace;
        $this->textDocument = $textDocument;
        $this->window = $window;
        $this->general = $general;
        $this->experimental = $experimental;
    }
}
