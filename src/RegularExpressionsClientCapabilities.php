<?php

namespace LanguageServerProtocol;

class RegularExpressionsClientCapabilities
{

	/**
	 * The engine's name.
	 *
	 * @var string
	 */
	public $engine;

	/**
	 * The engine's version.
	 *
	 * @var string|null
	 */
	public $version;


    public function __construct(string $engine, string $version = null)
	{
		$this->engine = $engine;
		$this->version = $version;
	}
}
