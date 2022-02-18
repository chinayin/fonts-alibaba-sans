<?php

namespace Fonts;

class FontsAlibabaSans
{

    public static function getPath(): string
    {
        return self::useRegular();
    }

    public static function useBlack(): string
    {
        return __DIR__ . '/../assets/AlibabaSans-Black.otf';
    }

    public static function useBold(): string
    {
        return __DIR__ . '/../assets/AlibabaSans-Bold.otf';
    }

    public static function useHeavy(): string
    {
        return __DIR__ . '/../assets/AlibabaSans-Heavy.otf';
    }

    public static function useLight(): string
    {
        return __DIR__ . '/../assets/AlibabaSans-Light.otf';
    }

    public static function useMedium(): string
    {
        return __DIR__ . '/../assets/AlibabaSans-Medium.otf';
    }

    public static function useRegular(): string
    {
        return __DIR__ . '/../assets/AlibabaSans-Regular.otf';
    }
}
