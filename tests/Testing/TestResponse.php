<?php

declare(strict_types=1);

namespace Tests\Testing;

use HetznerCloud\HttpClientUtilities\Contracts\ResponseContract;
use HetznerCloud\HttpClientUtilities\Responses\Concerns\ArrayAccessible;

/**
 * @phpstan-type TestResponseSchema array{foo: string}
 *
 * @implements ResponseContract<TestResponseSchema>
 */
final readonly class TestResponse implements ResponseContract
{
    /**
     * @use ArrayAccessible<TestResponseSchema>
     */
    use ArrayAccessible;

    public string $foo;

    public function __construct(?string $bar = null)
    {
        $this->foo = $bar ?? 'bar';
    }

    public function toArray(): array
    {
        return [
            'foo' => $this->foo,
        ];
    }
}
