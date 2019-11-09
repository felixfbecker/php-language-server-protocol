<?php

namespace LanguageServerProtocol;

/**
 * Contains additional information about the context in which a completion request is triggered.
 */
class CompletionContext implements \JsonSerializable
{
    /**
     * How the completion was triggered.
     *
     * @var int
     */
    public $triggerKind;

    /**
     * The trigger character (a single character) that has trigger code complete.
     * Is null if `triggerKind !== CompletionTriggerKind::TRIGGER_CHARACTER`
     *
     * @var string|null
     */
    public $triggerCharacter;

    public function __construct(int $triggerKind = null, string $triggerCharacter = null)
    {
        $this->triggerKind = $triggerKind;
        $this->triggerCharacter = $triggerCharacter;
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
