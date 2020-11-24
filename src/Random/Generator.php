<?php

declare(strict_types=1);

namespace Weskiller\Support\Random;

class Generator
{
    /**
     * 随机包含拉丁数字，大小写字母的字符串.
     *
     * @param int $length
     *
     * @return string
     */
    public static function str(int $length = 8): string
    {
        return self::create(
            $length,
            'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'
        );
    }

    /**
     * @param int $length
     * @param string $chars
     *
     * @return string
     * @throws
     */
    public static function create(int $length, string $chars): string
    {
        $count = strlen($chars);
        $str = '';
        if ($count === 0) {
            return '';
        }
        for ($i = 0; $i < $length; ++$i) {
            $str .= $chars[random_int(0, $count - 1)];
        }
        return $str;
    }

    /**
     *
     * @param int $length
     *
     * @return string
     */
    public static function number(int $length = 8): string
    {
        return self::create($length, '0123456789');
    }

    /**
     * @param int $length
     *
     * @return string
     */
    public static function chr(int $length = 8): string
    {
        return self::create($length,
            'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');
    }
}
