<?php
/**
 * Created by PhpStorm.
 * User: mhrilwan
 * Date: 12/6/15
 * Time: 7:45 AM
 */

namespace PDP\ChainOfResponsibility\BookTopic;


class BookSubSubTopic extends AbstractBookTopic
{
    private $topic = null;
    private $parentTopic = null;
    private $title = null;

    public function __construct($topic, BookSubTopic $parentTopic)
    {
        $this->topic = $topic;
        $this->parentTopic = $parentTopic;
        $this->title = null;
    }

    public function getTopic()
    {
        return $this->topic;
    }

    public function getParentTopic()
    {
        return $this->parentTopic;
    }

    public function getTitle()
    {
        if (!is_null($this->title)) {
            return $this->title;
        } else {
            return $this->parentTopic->getTitle();
        }
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }
}