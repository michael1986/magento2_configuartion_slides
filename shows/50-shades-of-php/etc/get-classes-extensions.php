<?php

$classes = [
    'Throwable',
    'BaseException',
    'EngineException',
    'ParseException',
    'Exception',
    'ErrorException',
    'Error',
    'ArithmeticError',
    'AssertionError',
    'DivisionByZeroError',
    'ParseError',
    'TypeError',
    'BadFunctionCallException',
    'BadMethodCallException',
    'DomainException',
    'InvalidArgumentException',
    'LengthException',
    'LogicException',
    'OutOfBoundsException',
    'OutOfRangeException',
    'OverflowException',
    'RangeException',
    'RuntimeException',
    'UnderflowException',
    'UnexpectedValueException',
];

foreach ($classes as $className) {
    echo '------------------', PHP_EOL;
    echo $className, PHP_EOL;
    echo 'Parents:', PHP_EOL;
    print_r(class_parents($className));
    echo 'Interfaces:', PHP_EOL;
    print_r(class_implements($className));
}