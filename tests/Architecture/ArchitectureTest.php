<?php
test('Classes don\'t use die')
    ->expect(['die'])
    ->not->toBeUsed();

// arch()
//     ->preset()
//     ->php();