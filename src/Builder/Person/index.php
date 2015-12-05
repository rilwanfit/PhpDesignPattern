<?php
namespace PDP\Builder\Person;

require_once __DIR__ .'/../../../vendor/autoload.php';

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
echo '<pre>';
var_dump($employedMale);

/**
 * object(Person)#5 (2) {
 * (
 *   ["employed"] => bool(false)
 *   ["gender"] => string(4) "Male"
 * )
 */
$unemployedMale   = $director->build($unemployedMaleBuilder);
var_dump($unemployedMale);