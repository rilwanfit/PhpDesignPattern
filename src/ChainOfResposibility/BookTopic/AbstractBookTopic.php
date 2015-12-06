<?php
/**
 * Created by PhpStorm.
 * User: mhrilwan
 * Date: 12/5/15
 * Time: 8:45 PM
 */

namespace PDP\ChainOfResponsibility\BookTopic;


abstract class AbstractBookTopic
{
    abstract function getTopic();
    abstract function getTitle();
    abstract function setTitle($title);
}