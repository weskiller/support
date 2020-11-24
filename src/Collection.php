<?php


namespace Weskiller\Support;

use Illuminate\Support\Arr;
use Illuminate\Support\Collection as IlluminateCollection;
use Weskiller\Support\Exception\AttributeNotExistException;

class Collection extends IlluminateCollection
{
    /**
     * @param string $name
     *
     * @return mixed
     * @throws AttributeNotExistException
     */
    public function pick(string $name)
    {
        if (Arr::exists($this->items, $name)) {
            return Arr::get($this->items, $name);
        }
        throw new AttributeNotExistException(sprintf(
            'attribute %s->%s does not exist.', static::class, $name
        ));
    }
}