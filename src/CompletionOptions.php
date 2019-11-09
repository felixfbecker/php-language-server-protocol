<?php

namespace LanguageServerProtocol;

/**
 * Completion options.
 */
class CompletionOptions implements \JsonSerializable
{
    /**
     * The server provides support to resolve additional information for a completion
     * item.
     *
     * @var bool|null
     */
    public $resolveProvider;

    /**
     * The characters that trigger completion automatically.
     *
     * @var string[]|null
     */
    public $triggerCharacters;

    public function __construct(bool $resolveProvider = null, array $triggerCharacters = null)
    {
        $this->resolveProvider = $resolveProvider;
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
