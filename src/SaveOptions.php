<?php

namespace LanguageServerProtocol;

/**
 * Options controlling what is sent to the server with save notifications.
 */
class SaveOptions implements \JsonSerializable
{
    /**
     * The client is supposed to include the content on save.
     * @var bool|null
     */
    public $includeText;

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
