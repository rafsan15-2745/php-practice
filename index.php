<?php
echo "Polymorphism in PHP";
echo '<br>';
echo "Abstract Class";
echo '<br>';
echo '<hr>';

abstract class class1 {
    abstract function fun1();
    
}
class class2 extends class1 {
    function fun1() {
        echo "fun1";
    }
}

class class3 extends class1 {
    function fun1() {
        echo "fun2";
    }
}
$obj = new class2();
$obj->fun1();

echo '<br>';
echo '<hr>';
echo "Interface: ";
echo '<br>';

interface cls1 {
     function fun1();   
}
class cls2 implements cls1 {
    function fun1() {
        echo "tun1";
    }
}
class cls3 implements cls1 {
    function fun1() {
        echo "tun2";
    }
}
$obj = new cls3();
$obj->fun1();
echo '<br>';
echo '<hr>';