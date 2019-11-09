<?php
declare(strict_types=1);

namespace LanguageServerProtocol;

/**
 * A detailed structure defining expected notifications from the client of changes to text documents.
 */
class TextDocumentSyncOptions implements \JsonSerializable
{
    /**
     * Open and close notifications are sent to the server.
     * @var bool|null
     */
    public $openClose;

    /**
     * Change notifications are sent to the server. See TextDocumentSyncKind.None, TextDocumentSyncKind.Full
     * and TextDocumentSyncKindIncremental.
     * @var int|null
     */
    public $change;

    /**
     * Will save notifications get sent to the server.
     * @var bool|null
     */
    public $willSave;

    /**
     * Will save wait until requests get sent to the server.
     * @var bool|null
     */
    public $willSaveWaitUntil;

    /**
     * Save notifications are sent to the server.
     * @var SaveOptions|null
     */
    public $save;

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
