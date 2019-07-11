<?php

declare(strict_types=1);

namespace pxgamer\JustWatch;

use pxgamer\JustWatch\Adapters\HttpAdapter;

final class JustWatch
{
    /** @var HttpAdapter */
    protected $adapter;

    /** @var string */
    protected $locale;

    public function __construct(HttpAdapter $adapter, ?string $locale = null)
    {
        $this->adapter = $adapter;
        $this->locale = $locale ?? 'en_US';
    }
}