<?php

namespace LanguageServerProtocol;

/**
 * Provide inline value as text.
 *
 * @since 3.17.0
 */
class InlineValueText
{
    /**
     * The document range for which the inline value applies.
     *
     * @var Range|null
     */
    public $range;

    /**
     * The text of the inline value.
     *
     * @var string|null
     */
    public $text;

    /**
     * @param Range|null $range Range
     * @param string|null $text Text
     */
    public function __construct(?\LanguageServerProtocol\Range $range = null, ?string $text = null)
    {
        /** @psalm-suppress PossiblyNullPropertyAssignmentValue */
        $this->range = $range;
        /** @psalm-suppress PossiblyNullPropertyAssignmentValue */
        $this->text = $text;
    }
}
