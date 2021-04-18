<?php

namespace hum\test;

class Test
{
    public function testgreet(String $sName)
    {
        return 'Hello Welcome ' . $sName . '! How are you doing today?';
    }
}