<?php

declare(strict_types=1);

namespace Weskiller\Support\Json;

class Translator
{
    public const ENCODE_FLAG
        = JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE
        | JSON_PRESERVE_ZERO_FRACTION;

    public const DECODE_FLAG = JSON_BIGINT_AS_STRING;

    /**
     * @param $value
     *
     * @param int $flags
     *
     * @return string
     * @throws
     */
    public static function encode($value, int $flags = 0): string
    {
        return json_encode($value,
            JSON_THROW_ON_ERROR | ($flags ? ($flags | self::ENCODE_FLAG)
                : self::ENCODE_FLAG));
    }

    /**
     * Decodes a JSON string. Accepts flag Json::FORCE_ARRAY.
     *
     * @param string $json
     * @param int $flags
     *
     * @return mixed
     * @throws
     */
    public static function decode(string $json, int $flags = 0)
    {
        return json_decode(
            $json,
            true,
            512,
            JSON_THROW_ON_ERROR |
            ($flags ? ($flags | self::DECODE_FLAG) : self::DECODE_FLAG)
        );
    }
}
