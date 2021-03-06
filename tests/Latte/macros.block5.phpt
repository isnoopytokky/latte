<?php

/**
 * Test: Latte\Engine and blocks.
 */

use Tester\Assert;


require __DIR__ . '/../bootstrap.php';


$latte = new Latte\Engine;
$latte->setLoader(new Latte\Loaders\StringLoader);

Assert::match('', $latte->renderToString('{define foobar}Hello{/define}'));

Assert::match('', $latte->renderToString('{define foo-bar}Hello{/define}'));

Assert::match('', $latte->renderToString('{define $foo}Hello{/define}', array('foo' => 'bar')));
