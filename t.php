<?php

class A {
    function __construct () {
        $this->b = new B($this);
    }
    function __destruct () {
        $this->b->__destruct();
    }
}

class B {
    function __construct ($parent = NULL) {
        $this->parent = $parent;
    }
    function __destruct () {
        unset($this->parent);
    }
}

function test(){
for ($i = 0 ; $i < 10000 ; $i++) {
    $a = new A();
    $a->__destruct();   // 看看这行注释与不注释有何不同
}
}

test();
echo number_format(memory_get_usage());