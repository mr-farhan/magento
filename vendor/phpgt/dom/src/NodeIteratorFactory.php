<?php
namespace Gt\Dom;

class NodeIteratorFactory extends NodeIterator {
	public static function create(
		Node|Element $root,
		int $whatToShow = NodeFilter::SHOW_ALL,
		NodeFilter|callable $filter = null
	):NodeIterator {
		$class = NodeIterator::class;
		return new $class($root, $whatToShow, $filter);
	}
}
