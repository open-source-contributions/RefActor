<?php

namespace PHPFUI\RefActor\Tests;

use PHPUnit\Framework\TestCase;

class RefActorTest extends TestCase
	{

	public function testCanSetPHPVersion() : void
		{
		$refactor = new \PHPFUI\RefActor();
		$refactor->setPHPVersion(\PhpParser\ParserFactory::PREFER_PHP7);
		$refactor->setPHPVersion(\PhpParser\ParserFactory::PREFER_PHP5);
		$refactor->setPHPVersion(\PhpParser\ParserFactory::ONLY_PHP7);
		$refactor->setPHPVersion(\PhpParser\ParserFactory::ONLY_PHP5);
		$this->expectException(\InvalidArgumentException::class);
		$refactor->setPHPVersion(\PhpParser\ParserFactory::ONLY_PHP5 + 1);
		}

	}
