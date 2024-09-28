<?php

namespace LanguageServerProtocol;

/**
 * @since 3.17.0
 */
class InlineValueContext
{
    /**
     * The stack frame (as a DAP Id) where the execution has stopped.
     *
     * @var int|null
     */
    public $frameId;

    /**
     * The document range where execution has stopped.
     * Typically the end position of the range denotes the line where the
     * inline values are shown.
     *
     * @var Range|null
     */
    public $stoppedLocation;

    /**
     * @param int|null $frameId stack frame Id
     * @param Range|null $stoppedLocation Range
     */
    public function __construct(?int $frameId = null, ?\LanguageServerProtocol\Range $stoppedLocation = null)
    {
        /** @psalm-suppress PossiblyNullPropertyAssignmentValue */
        $this->frameId = $frameId;
        /** @psalm-suppress PossiblyNullPropertyAssignmentValue */
        $this->stoppedLocation = $stoppedLocation;
    }
}
