<?php

namespace LanguageServerProtocol;

class PublishDiagnosticsClientCapabilitiesTagSupport
{
    /**
     * The tags supported by the client.
     *
     * @var int[]
     * @see DiagnosticTag
     */
    public $valueSet;

    /**
     * @param int[] $valueSet
     */
    public function __construct(array $valueSet)
    {
        $this->valueSet = $valueSet;
    }
}
