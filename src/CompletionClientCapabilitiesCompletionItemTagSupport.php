<?php

namespace LanguageServerProtocol;

class CompletionClientCapabilitiesCompletionItemTagSupport
{

    /**
     * The tags supported by the client.
     *
     * @var int[]
     */
    public $valueSet;

    /**
     * @param int[] $valueSet CompletionItemTag
     */
    public function __construct(
        array $valueSet = null
    ) {
        $this->valueSet = $valueSet;
    }
}
