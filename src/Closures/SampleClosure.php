<?php
namespace Closures;

class SampleClosure
{
    public function doTest1(): string
    {
        $closure = static function($name) {
            return 'Hello~ '.$name;
        };
        
        return $closure('yypbd');
    }

    public function doTest2(): array
    {
        return array_map(static function ($number) {
            return $number + 1;
        }, [3, 4, 5]);
    }

}
