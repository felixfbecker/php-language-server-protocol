<?php

namespace LanguageServerProtocol;

/**
 * Signature help options.
 */
class SignatureHelpOptions implements \JsonSerializable
{
    /**
     * The characters that trigger signature help automatically.
     *
     * @var string[]|null
     */
    public $triggerCharacters;

    public function __construct(array $triggerCharacters = null)
    {
        $this->triggerCharacters = $triggerCharacters;
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
