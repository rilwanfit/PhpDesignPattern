<?php

/**
 * Created by PhpStorm.
 * User: mhrilwan
 * Date: 12/5/15
 * Time: 2:35 PM
 */
class EmployedMaleBuilder implements PersonBuilderInterface
{
    private $person = null;

    public function __construct()
    {
        $this->person = new Person();
    }

    public function setGender()
    {
        $this->person->gender = Person::GENDER_MALE;
    }

    public function setEmployed()
    {
        $this->person->employed = true;
    }

    public function getResult()
    {
        return $this->person;
    }
}