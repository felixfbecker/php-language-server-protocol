<?php

namespace LanguageServerProtocol;

abstract class CompletionItemTag
{
    /**
     * Render a completion as obsolete, usually using a strike-out.
     */
    const Deprecated = 1;
}
