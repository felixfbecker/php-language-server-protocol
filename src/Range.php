<?php

namespace LanguageServerProtocol;

/**
 * A range in a text document expressed as (zero-based) start and end positions.
 */
class Range
{
    /**
     * The range's start position.
     *
     * @var Position
     */
    public $start;

    /**
     * The range's end position.
     *
     * @var Position
     */
    public $end;

    public function __construct(?\LanguageServerProtocol\Position $start = null, ?\LanguageServerProtocol\Position $end = null)
    {
        /** @psalm-suppress PossiblyNullPropertyAssignmentValue */
        $this->start = $start;
        /** @psalm-suppress PossiblyNullPropertyAssignmentValue */
        $this->end = $end;
    }

    /**
     * Checks if a position is within the range
     *
     * @param Position $position
     * @return bool
     */
    public function includes(Position $position): bool
    {
        return $this->start->compare($position) <= 0 && $this->end->compare($position) >= 0;
    }
}
