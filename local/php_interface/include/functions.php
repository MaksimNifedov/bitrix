<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

function dd($var, $die = false): void
{
    \Kint\Kint::dump($var);
    !$die ?: exit;
}
