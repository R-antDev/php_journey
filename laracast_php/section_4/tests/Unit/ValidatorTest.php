<?php

it('Validates a string', function () {
   $result = \Core\Validator::string('foobar');
   expect($result)->toBeTrue();
});

it('Validates a string with a minimum length', function () {
    expect(\Core\Validator::string('foo', 20))->toBeFalse();
});

it('Validates a email', function () {
    expect(\Core\Validator::email('foo'))->toBeFalse();
});

