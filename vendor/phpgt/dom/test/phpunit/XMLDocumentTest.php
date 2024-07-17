<?php
namespace Gt\Dom\Test;

use DOMDocument;
use Gt\Dom\DocumentType;
use Gt\Dom\Element;
use Gt\Dom\ElementType;
use Gt\Dom\Exception\InvalidCharacterException;
use Gt\Dom\Exception\WriteOnNonHTMLDocumentException;
use Gt\Dom\HTMLDocument;
use Gt\Dom\Test\TestFactory\DocumentTestFactory;
use Gt\Dom\XMLDocument;
use Gt\PropFunc\PropertyDoesNotExistException;
use PHPUnit\Framework\TestCase;

class XMLDocumentTest extends TestCase {
	public function testBodyNullOnXML():void {
		$sut = new XMLDocument();
		self::expectException(PropertyDoesNotExistException::class);
		/** @noinspection PhpExpressionResultUnusedInspection */
		/** @noinspection PhpUndefinedFieldInspection */
		$sut->body;
	}

	public function testToStringEmptyXML():void {
		$sut = new XMLDocument();
		self::assertEquals("<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<xml/>\n", (string)$sut);
	}

	public function testPropContentTypeEmpty():void {
		$sut = new XMLDocument();
		self::assertEquals("application/xml", $sut->contentType);
	}

	public function testDoctype():void {
		$sut = new HTMLDocument();
		self::assertInstanceOf(DocumentType::class, $sut->doctype);
	}

	public function testDocumentElementXML():void {
		$sut = new XMLDocument();
		self::assertSame(ElementType::Element, $sut->documentElement->elementType);
	}

	public function testHeadNullOnXML():void {
		$sut = new XMLDocument();
		self::expectException(PropertyDoesNotExistException::class);
		/** @noinspection PhpExpressionResultUnusedInspection */
		/** @noinspection PhpUndefinedFieldInspection */
		/** @phpstan-ignore-next-line */
		$sut->head;
	}

	public function testWriteDirectlyToDocument():void {
		$message = "Hello from PHPUnit!";
		$sut = new XMLDocument();
		self::expectException(WriteOnNonHTMLDocumentException::class);
		$sut->open();
		$sut->write($message);
	}

	public function testCreateCDATASection():void {
		$sut = new XMLDocument();
		$data = "Example CDATASection data!";
		$cdata = $sut->createCDATASection($data);
		self::assertEquals($data, $cdata->nodeValue);
	}

	public function testCreateCDATASectionInvalidCharacter():void {
		$sut = new XMLDocument();
		$data = "Illegal Characters ]]>";
		self::expectException(InvalidCharacterException::class);
		$sut->createCDATASection($data);
	}

	public function testGetElementByIdXMLBug():void {
// There is a known bug in XML documents where getElementById doesn't actually
// match elements. This has been patched by Gt\Dom, but to prove it, this test
// will expose the original bug on the native document.
		$bugDocument = new DOMDocument("1.0", "UTF-8");
		$bugDocument->loadXML(DocumentTestFactory::XML_SHAPE);
		$missingElement = $bugDocument->getElementById("target");
// This _shouldn't_ be null, but it is in the libxml2 implementation (buggy!)
		self::assertNull($missingElement);

		$sut = new XMLDocument(DocumentTestFactory::XML_SHAPE);
		$element = $sut->getElementById("target");
		self::assertInstanceOf(Element::class, $element);
		self::assertEquals("circle", $element->tagName);
	}

	public function testEvaluate():void {
		$sut = new XMLDocument(DocumentTestFactory::XML_BREAKFAST_MENU);

		$i = null;
		foreach($sut->evaluate("//food") as $i => $foodElement) {
			self::assertInstanceOf(Element::class, $foodElement);
		}

		self::assertSame(4, $i);
	}

	public function testGetElementsByClassName():void {
		$sut = new XMLDocument();
		$root = $sut->createElement("root");
		$sut->firstChild->appendChild($root);
		$trunk = $sut->createElement("trunk");
		$root->appendChild($trunk);
		$leaf = $sut->createElement("leaf");
		$trunk->appendChild($leaf);

		$root->className = "below-ground brown";
		$trunk->className = "above-ground brown";
		$leaf->className = "above-ground green";

		self::assertCount(
			2,
			$sut->getElementsByClassName("above-ground")
		);
		self::assertCount(
			1,
			$sut->getElementsByClassName("green")
		);
		self::assertCount(
			2,
			$sut->getElementsByClassName("brown")
		);
	}
}
