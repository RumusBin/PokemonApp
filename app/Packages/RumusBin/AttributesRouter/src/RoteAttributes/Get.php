<?php

namespace RumusBin\AttributesRouter\src\RoteAttributes;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD)]
class Get extends Route
{
    public function __construct(
        string $uri,
        ?string $name = null,
        array | string $middleware = [],
    ) {
        parent::__construct(
            methods: ['get'],
            uri: $uri,
            name: $name,
            middleware: $middleware,
        );
    }
}
