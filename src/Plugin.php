<?php

namespace App\Psalm;

use SimpleXMLElement;
use Psalm\Plugin\PluginEntryPointInterface;
use Psalm\Plugin\RegistrationInterface;

class Plugin implements PluginEntryPointInterface
{
    /** @return void */
    public function __invoke(RegistrationInterface $psalm, ?SimpleXMLElement $config = null)
    {
        require_once __DIR__ . '/BadSqlTainter.php';
        $psalm->registerHooksFromClass(BadSqlTainter::class);
    }
}