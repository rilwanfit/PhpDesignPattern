<?php
/**
 * Created by PhpStorm.
 * User: mhrilwan
 * Date: 12/5/15
 * Time: 7:52 PM
 */

namespace PDP\ChainOfResponsibility\AlarmSystem;


class Chain
{
    protected $chain = [];
    protected $key = 0;

    public function append($callback)
    {
        $this->chain[] = $callback;
    }

    public function prepend($callback)
    {
        array_unshift($this->chain, $callback);
    }

    public function reset()
    {
        $this->key = 0;
        return $this;
    }

    public function next()
    {
        $this->key++;
        return $this;
    }

    public function handle($params)
    {
        if (isset($this->chain[$this->key])) {
            $callback = $this->chain[$this->key];
            return $callback($this, $params);
        }
        throw new \OutOfBoundsException("Cannot handle chain of request, failed off");
    }
}