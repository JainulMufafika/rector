<?php

declare(strict_types=1);
use Rector\Config\RectorConfig;
use Rector\Php80\Rector\ClassMethod\AddParamBasedOnParentClassMethodRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
	      __DIR__ . '/home',
        __DIR__ . '/root',
        __DIR__ . '/usr',
    ]);

   
   $rectorConfig->rule(AddParamBasedOnParentClassMethodRector::class);
   
};
  
