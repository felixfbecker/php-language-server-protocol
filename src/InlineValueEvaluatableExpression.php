<?php

namespace LanguageServerProtocol;

/**
 * Provide an inline value through an expression evaluation.
 *
 * If only a range is specified, the expression will be extracted from the
 * underlying document.
 *
 * An optional expression can be used to override the extracted expression.
 *
 * @since 3.17.0
 */
class InlineValueEvaluatableExpression
{
    /**
     * The document range for which the inline value applies.
     * The range is used to extract the evaluatable expression from the
     * underlying document.
     *
     * @var Range|null
     */
    public $range;

    /**
     * If specified the expression overrides the extracted expression.
     *
     * @var string|null
     */
    public $expression;

    /**
     * @param Range|null $range Range
     * @param string|null $expression expression
     */
    public function __construct(?\LanguageServerProtocol\Range $range = null, ?string $expression = null)
    {
        /** @psalm-suppress PossiblyNullPropertyAssignmentValue */
        $this->range = $range;
        $this->expression = $expression;
    }
}
