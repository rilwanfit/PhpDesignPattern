<?php

/**
 * Created by PhpStorm.
 * User: mhrilwan
 * Date: 12/5/15
 * Time: 2:33 PM
 */
interface PersonBuilderInterface
{
    public function setGender();
    public function setEmployed();
    public function getResult();
}