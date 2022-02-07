<?php

namespace LanguageServerProtocol;

class WindowClientCapabilities
{
    /**
     * Whether client supports server initiated progress using the
     * `window/workDoneProgress/create` request.
     *
     * @var bool|null
     */
    public $workDoneProgress;

    public function __construct(bool $workDoneProgress = null)
    {
        $this->workDoneProgress = $workDoneProgress;
    }
}
