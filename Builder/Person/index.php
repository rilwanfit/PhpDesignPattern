<?php
$director                = new PersonDirector();
$employedMaleBuilder     = new EmployedMaleBuilder();
$unemployedMaleBuilder   = new UnemployedMaleBuilder();
//$employedFemaleBuilder   = new EmployedFemaleBuilder();
//$unemployedFemaleBuilder = new UnemployedFemaleBuilder();

/**
 * object(Person)#3 (2) {
 * (
 *   ["employed"] => bool(true)
 *   ["gender"] => string(4) "Male"
 * )
 */
$employedMale     = $director->build($employedMaleBuilder);

/**
 * object(Person)#5 (2) {
 * (
 *   ["employed"] => bool(false)
 *   ["gender"] => string(4) "Male"
 * )
 */
$unemployedMale   = $director->build($unemployedMaleBuilder);