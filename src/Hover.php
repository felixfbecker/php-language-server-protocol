<?php

namespace LanguageServerProtocol;

/**
 * The result of a hover request.
 */
class Hover implements \JsonSerializable
{
    /**
     * The hover's content
     *
     * @var string|MarkedString|string[]|MarkedString[]|MarkupContent
     */
    public $contents;

    /**
     * An optional range
     *
     * @var Range|null
     */
    public $range;

    /**
     * @param string|MarkedString|string[]|MarkedString[] $contents The hover's content
     * @param Range $range An optional range
     */
    public function __construct($contents = null, $range = null)
    {
        $this->contents = $contents;
        $this->range = $range;
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
