<?php

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Support\Enumerable;
use Weskiller\Support\Json\Translator;

if (!function_exists('force2array')) {
    /**
     * @param $item
     *
     * @return array|mixed
     * @throws
     *
     */
    function force2array($item)
    {
        if (is_array($item)) {
            return $item;
        }

        if ($item instanceof Enumerable) {
            return $item->all();
        }

        if ($item instanceof Arrayable
            || method_exists($item,'toArray')
        ) {
            return $item->toArray();
        }

        if ($item instanceof Jsonable
            || method_exists($item,'toJson')
        ) {
            return Translator::decode($item->toJson());
        }

        if ($item instanceof Enumerable) {
            return $item->all();
        }

        if ($item instanceof JsonSerializable) {
            return (array) $item->jsonSerialize();
        }

        if ($item instanceof Traversable) {
            return iterator_to_array($item);
        }

        return (array) $item;
    }
}