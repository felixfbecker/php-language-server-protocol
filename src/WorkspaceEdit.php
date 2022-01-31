<?php

namespace LanguageServerProtocol;

/**
 * A workspace edit represents changes to many resources managed in the workspace.
 */
class WorkspaceEdit
{
    /**
     * Holds changes to existing resources. Associative Array from URI to TextEdit
     *
     * @var array<string, TextEdit[]>
     */
    public $changes;

    /**
     * Depending on the client capability
     * `workspace.workspaceEdit.resourceOperations` document changes are either
     * an array of `TextDocumentEdit`s to express changes to n different text
     * documents where each text document edit addresses a specific version of
     * a text document. Or it can contain above `TextDocumentEdit`s mixed with
     * create, rename and delete file / folder operations.
     *
     * Whether a client supports versioned document edits is expressed via
     * `workspace.workspaceEdit.documentChanges` client capability.
     *
     * If a client neither supports `documentChanges` nor
     * `workspace.workspaceEdit.resourceOperations` then only plain `TextEdit`s
     * using the `changes` property are supported.
     *
     * @var mixed
     */
    public $documentChanges;

    /**
     * A map of change annotations that can be referenced in
     * `AnnotatedTextEdit`s or create, rename and delete file / folder
     * operations.
     *
     * Whether clients honor this property depends on the client capability
     * `workspace.changeAnnotationSupport`.
     *
     * @since 3.16.0
     *
     * @var array<string, ChangeAnnotation>|null
     */
    public $changeAnnotations;

    /**
     * @param array<string, TextEdit[]> $changes
     */
    public function __construct(
        array $changes = [],
        $documentChanges = null,
        array $changeAnnotations = []
    ) {
        $this->changes = $changes;
        $this->documentChanges = $documentChanges;
        $this->changeAnnotations = $changeAnnotations;
    }
}
