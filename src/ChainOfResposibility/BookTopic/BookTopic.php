<?php
/**
 * Created by PhpStorm.
 * User: mhrilwan
 * Date: 12/5/15
 * Time: 8:44 PM
 */

namespace PDP\ChainOfResponsibility\BookTopic;


class BookTopic extends AbstractBookTopic
{
    private $topic;
    private $title;

    /**
     * BookTopic constructor.
     * @param $topic
     */
    public function __construct($topic)
    {
        $this->topic = $topic;
        $this->title = null;
    }


    function getTopic()
    {
        return $this->topic;
    }

    function getTitle()
    {
        if (!is_null($this->title)) {
            return $this->title;
        } else {
            return 'there is no title available';
        }
    }

    function setTitle($title)
    {
        $this->title = $title;
    }
}