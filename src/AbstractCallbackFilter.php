<?php

declare(strict_types=1);

namespace Windwalker\Filter;

/**
 * The AbstractCallbackFilter class.
 */
abstract class AbstractCallbackFilter extends AbstractFilter
{
    /**
     * @inheritDoc
     */
    public function filter(mixed $value): mixed
    {
        return $this->getHandler()($value);
    }

    /**
     * @return callable
     */
    abstract public function getHandler(): callable;
}
