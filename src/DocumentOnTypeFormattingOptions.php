<?php

namespace LanguageServerProtocol;

/**
 * Format document on type options
 */
class DocumentOnTypeFormattingOptions implements \JsonSerializable
{
    /**
     * A character on which formatting should be triggered, like `}`.
     *
     * @var string
     */
    public $firstTriggerCharacter;

    /**
     * More trigger characters.
     *
     * @var string[]|null
     */
    public $moreTriggerCharacter;

    public function __construct(string $firstTriggerCharacter = null, array $moreTriggerCharacter = null)
    {
        $this->firstTriggerCharacter = $firstTriggerCharacter;
        $this->moreTriggerCharacter = $moreTriggerCharacter;
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
