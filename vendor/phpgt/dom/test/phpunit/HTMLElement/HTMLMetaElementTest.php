<?php
namespace Gt\Dom\Test\HTMLElement;

use Gt\Dom\HTMLDocument;

class HTMLMetaElementTest extends HTMLElementTestCase {
	public function testContent():void {
		$document = new HTMLDocument();
		$sut = $document->createElement("meta");
		self::assertPropertyAttributeCorrelate($sut, "content");
	}

	public function testHttpEquiv():void {
		$document = new HTMLDocument();
		$sut = $document->createElement("meta");
		self::assertPropertyAttributeCorrelate($sut, "http-equiv", "httpEquiv");
	}

	public function testName():void {
		$document = new HTMLDocument();
		$sut = $document->createElement("meta");
		self::assertPropertyAttributeCorrelate($sut, "name");
	}
}
