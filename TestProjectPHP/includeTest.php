<?php
$printArray = function(array $myarray1)
{
    print_r("Array demonstration with foreach\n");
    foreach ($myarray1 as $element) {
        print_r("{$element}\n");
    }
};

//Closure
$printDict = function (array $dict) {
    print_r("Linked array demonstration with foreach\n");
    foreach ($dict as $key => $value) {
        print_r("Key : {$key}, value: {$value}\n");
    }
};
