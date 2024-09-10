<?php

namespace Yolo;

class Hello
{
    public static function hola(): void
    {
        die('This line will be ignored'); // @pest-arch-ignore-line
    }
}