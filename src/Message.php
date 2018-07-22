<?php
declare(strict_types = 1);

namespace LanguageServer\Protocol;

use AdvancedJsonRpc\Message as MessageBody;

class Message
{
    /**
     * @var \AdvancedJsonRpc\Message
     */
    public $body;

    /**
     * @var string[]
     */
    public $headers;

    /**
     * @param \AdvancedJsonRpc\Message $body
     * @param string[] $headers
     */
    public function __construct(MessageBody $body = null, array $headers = [])
    {
        $this->body = $body;
        if (!isset($headers['Content-Type'])) {
            $headers['Content-Type'] = 'application/vscode-jsonrpc; charset=utf8';
        }
        $this->headers = $headers;
    }

    public function __toString(): string
    {
        $body = (string)$this->body;
        $contentLength = strlen($body);
        $this->headers['Content-Length'] = $contentLength;
        $headers = '';
        foreach ($this->headers as $name => $value) {
            $headers .= "$name: $value\r\n";
        }
        return $headers . "\r\n" . $body;
    }
}
