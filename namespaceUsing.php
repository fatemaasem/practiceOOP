<?php 
require 'namespace.php'; // Assuming MyClass.php contains the namespace and class definition
use MyNamespace\MyClass;
$obj1 = new MyNamespace\MyClass();
$obj2=new MyClass;
MyNamespace\myFunction();
echo MyNamespace\MY_CONSTANT;