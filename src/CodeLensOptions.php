<?php

namespace LanguageServerProtocol;

/**
 * Code Lens options.
 */
class CodeLensOptions implements \JsonSerializable
{
    /**
     * Code lens has a resolve provider as well.
     *
     * @var bool|null
     */
    public $resolveProvider;

    public function __construct(bool $resolveProvider = null)
    {
        $this->resolveProvider = $resolveProvider;
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
