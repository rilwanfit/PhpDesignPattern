<?php
/**
 * Created by PhpStorm.
 * User: mhrilwan
 * Date: 12/5/15
 * Time: 9:08 PM
 */

namespace PDP\ChainOfResponsibility\BookTopic;


class BookSubTopic extends AbstractBookTopic
{
    private $topic = null;
    private $parentTopic = null;
    private $title = null;

    public function __construct($topic, BookTopic $parentTopic)
    {
        $this->topic = $topic;
        $this->parentTopic = $parentTopic;
        $this->title = null;
    }

    function getTopic()
    {
        return $this->topic;
    }

    public function getParentTopic()
    {
        $this->parentTopic;
    }

    function getTitle()
    {
        if (!is_null($this->title)) {
            return $this->title;
        } else {
            return $this->parentTopic->getTitle();
        }
    }

    function setTitle($title)
    {
        $this->title = $title;
    }
}