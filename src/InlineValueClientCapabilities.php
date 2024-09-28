<?php

namespace LanguageServerProtocol;

class InlineValueClientCapabilities
{

    /**
     * Whether implementation supports dynamic registration for inline value providers.
     *
     * @var bool|null
     */
    public $dynamicRegistration;

    public function __construct(
        ?bool $dynamicRegistration = null
    ) {
        $this->dynamicRegistration = $dynamicRegistration;
    }
}
