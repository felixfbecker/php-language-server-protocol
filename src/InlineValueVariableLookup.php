<?php

namespace LanguageServerProtocol;

/**
 * Provide inline value through a variable lookup.
 *
 * If only a range is specified, the variable name will be extracted from
 * the underlying document.
 *
 * An optional variable name can be used to override the extracted name.
 *
 * @since 3.17.0
 */
class InlineValueVariableLookup
{
    /**
     * The document range for which the inline value applies.
     * The range is used to extract the variable name from the underlying
     * document.
     *
     * @var Range|null
     */
    public $range;

    /**
     * If specified the name of the variable to look up.
     *
     * @var string|null
     */
    public $variableName;

    /**
     *  How to perform the lookup.
     *
     * @var bool|null
     */
    public $caseSensitiveLookup;

    /**
     * @param Range|null $range Range
     * @param string|null $variableName variableName
     * @param bool|null $caseSensitiveLookup caseSensitiveLookup
     */
    public function __construct(
        ?\LanguageServerProtocol\Range $range = null,
        ?string $variableName = null,
        ?bool $caseSensitiveLookup = null
    ) {
        /** @psalm-suppress PossiblyNullPropertyAssignmentValue */
        $this->range = $range;
        $this->variableName = $variableName;
        /** @psalm-suppress PossiblyNullPropertyAssignmentValue */
        $this->caseSensitiveLookup = $caseSensitiveLookup;
    }
}
