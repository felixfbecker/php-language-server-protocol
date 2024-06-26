<?php

namespace LanguageServerProtocol;

/**
 * A code lens represents a command that should be shown along with
 * source text, like the number of references, a way to run tests, etc.
 *
 * A code lens is _unresolved_ when no command is associated to it. For performance
 * reasons the creation of a code lens and resolving should be done in two stages.
 */
class CodeLens
{
    /**
     * The range in which this code lens is valid. Should only span a single line.
     *
     * @var Range
     */
    public $range;

    /**
     * The command this code lens represents.
     *
     * @var Command|null
     */
    public $command;

    /**
     * A data entry field that is preserved on a code lens item between
     * a code lens and a code lens resolve request.
     *
     * @var mixed|null
     */
    public $data;

    /**
     * @param mixed $data
     */
    public function __construct(?\LanguageServerProtocol\Range $range = null, ?\LanguageServerProtocol\Command $command = null, $data = null)
    {
        /** @psalm-suppress PossiblyNullPropertyAssignmentValue */
        $this->range = $range;
        $this->command = $command;
        $this->data = $data;
    }
}
