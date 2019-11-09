<?php

namespace LanguageServerProtocol;

/**
 * A document highlight is a range inside a text document which deserves
 * special attention. Usually a document highlight is visualized by changing
 * the background color of its range.
 */
class DocumentHighlight implements \JsonSerializable
{
    /**
     * The range this highlight applies to.
     *
     * @var Range
     */
    public $range;

    /**
     * The highlight kind, default is DocumentHighlightKind::TEXT.
     *
     * @var int|null
     */
    public $kind;

    public function __construct(Range $range = null, int $kind = null)
    {
        $this->range = $range;
        $this->kind = $kind;
    }

    /**
     * Only serialize properties with valid values.
     *
     * @return object
     */
    public function jsonSerialize()
    {
        $fields = new \stdClass;

        foreach (get_object_vars($this) as $name => $value) {
            if ($value !== null) {
                $fields->$name = $value;
            }
        }

        return $fields;
    }
}
