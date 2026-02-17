<?php
// app/helpers.php

use TailwindMerge\TailwindMerge;
use TailwindMerge\Laravel\Facades\TailwindMerge as TailwindMergeFacade;

if (!function_exists('cn')) {
    function cn(...$classes): string
    {
        static $tw;
        static $cache = [];
        static $useTailwindMerge;

        $useTailwindMerge = true;

        // Build normalized parts array
        $parts = [];
        foreach ($classes as $class) {
            if (empty($class))
                continue;

            if (is_array($class)) {
                foreach ($class as $c) {
                    if (!empty($c)) {
                        foreach (preg_split('/\s+/', trim($c)) as $segment) {
                            if ($segment !== '')
                                $parts[] = $segment;
                        }
                    }
                }
            } elseif (is_string($class)) {
                foreach (preg_split('/\s+/', trim($class)) as $segment) {
                    if ($segment !== '')
                        $parts[] = $segment;
                }
            }
        }

        // Fast paths
        if (!$parts)
            return '';
        if (count($parts) === 1)
            return $parts[0];

        // Create cache key
        $cacheKey = implode(' ', $parts);

        // Return cached result
        if (isset($cache[$cacheKey])) {
            return $cache[$cacheKey];
        }

        // Process based on configuration
        if ($useTailwindMerge && class_exists(TailwindMerge::class)) {
            // Use facade if available (Laravel package)
            if (class_exists(TailwindMergeFacade::class)) {
                $result = TailwindMergeFacade::merge($cacheKey);
            } else {
                // Create instance with default config
                $tw ??= TailwindMerge::factory()->make();
                $result = $tw->merge($cacheKey);
            }
        } else {
            // Simple deduplication
            $result = implode(' ', array_unique($parts));
        }

        // Manage cache size
        if (count($cache) >= 1000) {
            $cache = array_slice($cache, -500, null, true);
        }

        return $cache[$cacheKey] = $result;
    }
}

if (!function_exists('slotRoot')) {
    function slotRoot($slot): string
    {
        preg_match('/^<\s*([^\s>]+)/', trim($slot), $matches);
        return $matches[1];
    }
}

if (!function_exists(function: 'slotChild')) {
    function slotChild($slot, $root): string
    {
        $result = preg_replace('/<\/?' . preg_quote($root, '/') . '[^>]*>/i', '', $slot);
        return trim($result);
    }
}