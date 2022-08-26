<?php

declare (strict_types=1);
//namespace RectorPrefix202208;

use Neos\Rector\Rules\NodeGetChildNodesRector;
use Rector\Config\RectorConfig;
return static function (RectorConfig $rectorConfig) : void {
    $rectorConfig->rule(NodeGetChildNodesRector::class);
};
