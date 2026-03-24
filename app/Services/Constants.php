<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;

class Constants
{
    public static function sidebarItems()
    {
        return Cache::rememberForever(
            'sidebar-items',
            fn () => [
                'Menus' => [
                    [
                        'url' => route('docs.installation'),
                        'name' => 'Docs',
                        'available_from' => '2026-01-20',
                    ],
                    [
                        'url' => route('components'),
                        'name' => 'Components',
                        'available_from' => '2026-01-20',
                    ],
                ],
                'Sections' => [
                    [
                        'url' => route('docs'),
                        'name' => 'Introduction',
                        'available_from' => '2026-01-20',
                    ],
                    [
                        'url' => route('components'),
                        'name' => 'Components',
                        'available_from' => '2026-01-20',
                    ],
                ],

                'Get Started' => [
                    [
                        'url' => route('docs.installation'),
                        'name' => 'Installation',
                        'available_from' => '2026-01-20',
                    ],
                    [
                        'url' => route('docs.theming'),
                        'name' => 'Theming',
                        'available_from' => '2026-01-20',
                    ],
                ],

                'Components' => [
                    [
                        'url' => route('components', 'accordion'),
                        'name' => 'Accordion',
                        'available_from' => null,
                    ],
                    [
                        'url' => route('components', 'alert'),
                        'name' => 'Alert',
                        'available_from' => null,
                    ],
                    [
                        'url' => route('components', 'avatar'),
                        'name' => 'Avatar',
                        'available_from' => null,
                    ],
                    [
                        'url' => route('components', 'badge'),
                        'name' => 'Badge',
                        'available_from' => null,
                    ],
                    [
                        'url' => route('components', 'breadcrumb'),
                        'name' => 'Breadcrumb',
                        'available_from' => null,
                    ],
                    [
                        'url' => route('components', 'button-group'),
                        'name' => 'Button Group',
                        'available_from' => null,
                    ],
                    [
                        'url' => route('components', 'button'),
                        'name' => 'Button',
                        'available_from' => '2026-01-20',
                    ],
                    [
                        'url' => route('components', 'card'),
                        'name' => 'Card',
                        'available_from' => null,
                    ],
                    [
                        'url' => route('components', 'carousel'),
                        'name' => 'Carousel',
                        'available_from' => null,
                    ],
                    [
                        'url' => route('components', 'chart'),
                        'name' => 'Chart',
                        'available_from' => null,
                    ],
                    [
                        'url' => route('components', 'checkbox'),
                        'name' => 'Checkbox',
                        'available_from' => '2026-01-20',
                    ],
                    [
                        'url' => route('components', 'collapsible'),
                        'name' => 'Collapsible',
                        'available_from' => '2026-01-20',
                    ],
                    [
                        'url' => route('components', 'command'),
                        'name' => 'Command',
                        'available_from' => null,
                    ],
                    [
                        'url' => route('components', 'context-menu'),
                        'name' => 'Context Menu',
                        'available_from' => null,
                    ],
                    [
                        'url' => route('components', 'data-table'),
                        'name' => 'Data Table',
                        'available_from' => null,
                    ],
                    [
                        'url' => route('components', 'dialog'),
                        'name' => 'Dialog',
                        'available_from' => null,
                    ],
                    [
                        'url' => route('components', 'drawer'),
                        'name' => 'Drawer',
                        'available_from' => null,
                    ],
                    [
                        'url' => route('components', 'dropdown-menu'),
                        'name' => 'Dropdown Menu',
                        'available_from' => null,
                    ],
                    [
                        'url' => route('components', 'field'),
                        'name' => 'Field',
                        'available_from' => null,
                    ],
                    [
                        'url' => route('components', 'input-group'),
                        'name' => 'Input Group',
                        'available_from' => null,
                    ],
                    [
                        'url' => route('components', 'input-otp'),
                        'name' => 'Input OTP',
                        'available_from' => null,
                    ],
                    [
                        'url' => route('components', 'input'),
                        'name' => 'Input',
                        'available_from' => '2026-01-20',
                    ],
                    [
                        'url' => route('components', 'kbd'),
                        'name' => 'Kbd',
                        'available_from' => '2026-01-20',
                    ],
                    [
                        'url' => route('components', 'label'),
                        'name' => 'Label',
                        'available_from' => '2026-01-20',
                    ],
                    [
                        'url' => route('components', 'navigation-menu'),
                        'name' => 'Navigation Menu',
                        'available_from' => null,
                    ],
                    [
                        'url' => route('components', 'pagination'),
                        'name' => 'Pagination',
                        'available_from' => null,
                    ],
                    [
                        'url' => route('components', 'popover'),
                        'name' => 'Popover',
                        'available_from' => null,
                    ],
                    [
                        'url' => route('components', 'progress'),
                        'name' => 'Progress',
                        'available_from' => null,
                    ],
                    [
                        'url' => route('components', 'radio'),
                        'name' => 'Radio',
                        'available_from' => '2026-01-20',
                    ],
                    [
                        'url' => route('components', 'select'),
                        'name' => 'Select',
                        'available_from' => '2026-01-20',
                    ],
                    [
                        'url' => route('components', 'separator'),
                        'name' => 'Separator',
                        'available_from' => '2026-01-20',
                    ],
                    [
                        'url' => route('components', 'sheet'),
                        'name' => 'Sheet',
                        'available_from' => null,
                    ],
                    [
                        'url' => route('components', 'sidebar'),
                        'name' => 'Sidebar',
                        'available_from' => null,
                    ],
                    [
                        'url' => route('components', 'skeleton'),
                        'name' => 'Skeleton',
                        'available_from' => null,
                    ],
                    [
                        'url' => route('components', 'slider'),
                        'name' => 'Slider',
                        'available_from' => null,
                    ],
                    [
                        'url' => route('components', 'sonner'),
                        'name' => 'Sonner',
                        'available_from' => null,
                    ],
                    [
                        'url' => route('components', 'spinner'),
                        'name' => 'Spinner',
                        'available_from' => null,
                    ],
                    [
                        'url' => route('components', 'switch'),
                        'name' => 'Switch',
                        'available_from' => null,
                    ],
                    [
                        'url' => route('components', 'table'),
                        'name' => 'Table',
                        'available_from' => '2026-01-20',
                    ],
                    [
                        'url' => route('components', 'tabs'),
                        'name' => 'Tabs',
                        'available_from' => '2026-01-20',
                    ],
                    [
                        'url' => route('components', 'textarea'),
                        'name' => 'Textarea',
                        'available_from' => '2026-01-20',
                    ],
                    [
                        'url' => route('components', 'toggle-group'),
                        'name' => 'Toggle Group',
                        'available_from' => null,
                    ],
                    [
                        'url' => route('components', 'tooltip'),
                        'name' => 'Tooltip',
                        'available_from' => null,
                    ],
                    [
                        'url' => route('components', 'typography'),
                        'name' => 'Typography',
                        'available_from' => '2026-01-20',
                    ],
                ],
            ],
        );
    }

    public static function searchStaticContent()
    {
        return Cache::rememberForever(
            'search-static-content',
            fn () => [
                [
                    'title' => 'Pages',
                    'items' => self::sidebarItems()['Menus'],
                    'icon' => 'arrow-right',
                ],
                [
                    'title' => 'Components',
                    'items' => self::sidebarItems()['Components'],
                    'icon' => 'circle-dashed',
                ],
                [
                    'title' => 'Get Started',
                    'items' => self::sidebarItems()['Get Started'],
                    'icon' => 'arrow-right',
                ],
            ],
        );
    }
}
