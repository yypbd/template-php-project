<?php
namespace Closures;

class SampleClosure
{
    public function doTest1()
    {
        $closure = function($name) {
            return 'Hello~ '.$name;
        };
        
        return $closure('yypbd');
    }

    public function doTest2()
    {
        $numbers = array_map(function ($number) {
            return $number + 1;
        }, [3, 4, 5]);

        return $numbers;
    }

}

?>