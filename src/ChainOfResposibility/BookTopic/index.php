<?php
/**
 * Created by PhpStorm.
 * User: mhrilwan
 * Date: 12/6/15
 * Time: 7:51 AM
 */

namespace PDP\ChainOfResponsibility\BookTopic;
require_once __DIR__ .'/../../../vendor/autoload.php';

echo '<pre>';
echo "BEGIN TESTING CHAIN OF RESPONSIBILITY PATTERN" . PHP_EOL;
$bookTopic = new BookTopic("PHP 5");
echo "bookTopic before title is set:" . PHP_EOL;
echo "topic: " . $bookTopic->getTopic() . PHP_EOL;
echo "title: " . $bookTopic->getTitle() . PHP_EOL;
echo "===============================" . PHP_EOL;

$bookTopic->setTitle("PHP 5 Recipes by Babin, Good, Keoman, and Stephens");
echo "bookTopic after title is set:" . PHP_EOL;
echo "topic: " . $bookTopic->getTopic() . PHP_EOL;
echo "title: " . $bookTopic->getTitle() . PHP_EOL . PHP_EOL;

$bookSubTopic = new BookSubTopic("PHP Patterns", $bookTopic);
echo "bookSubTopic before title is set:" . PHP_EOL;
echo "topic: " . $bookSubTopic->getTopic() . PHP_EOL;
echo "title: " . $bookSubTopic->getTitle() . PHP_EOL;
echo "===============================" . PHP_EOL;

$bookSubTopic->setTitle("PHP 5 Objects Patterns and Practice by Zandstra");
echo "bookSubTopic after title is set:" . PHP_EOL;
echo "topic: " . $bookSubTopic->getTopic() . PHP_EOL;
echo "title: " . $bookSubTopic->getTitle() . PHP_EOL . PHP_EOL;

$bookSubSubTopic = new BookSubSubTopic("PHP Patterns for Cats", $bookSubTopic);
echo "bookSubSubTopic before title is set:" . PHP_EOL;
echo "topic: " . $bookSubSubTopic->getTopic() . PHP_EOL;
echo "title: " . $bookSubSubTopic->getTitle() . PHP_EOL;
echo "===============================" . PHP_EOL;

$bookSubTopic->setTitle(null);
echo "bookSubSubTopic with no title for set for bookSubTopic either: " . PHP_EOL;
echo "topic: " . $bookSubSubTopic->getTopic() . PHP_EOL;
echo "title: " . $bookSubSubTopic->getTitle() . PHP_EOL . PHP_EOL;

