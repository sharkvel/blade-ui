<?php

namespace App\Services;

class Constants
{
    public static function sidebarItems()
    {
        return [
            'Menus' => [
                [
                    'url' => route('docs.installation'),
                    'name' => 'Docs',
                    'available_from' => '2026-01-20',
                ],
                [
                    'url' => route('component'),
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
                    'url' => route('component'),
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
                    'url' => '',
                    'name' => 'Theming',
                    'available_from' => '2026-01-20',
                ],
            ],

            'Components' => [
                [
                    'url' => route('component', 'accordion'),
                    'name' => 'Accordion',
                    'available_from' => null,
                ],
                [
                    'url' => route('component', 'alert'),
                    'name' => 'Alert',
                    'available_from' => null,
                ],
                [
                    'url' => route('component', 'avatar'),
                    'name' => 'Avatar',
                    'available_from' => null,
                ],
                [
                    'url' => route('component', 'badge'),
                    'name' => 'Badge',
                    'available_from' => null,
                ],
                [
                    'url' => route('component', 'breadcrumb'),
                    'name' => 'Breadcrumb',
                    'available_from' => null,
                ],
                [
                    'url' => route('component', 'button-group'),
                    'name' => 'Button Group',
                    'available_from' => null,
                ],
                [
                    'url' => route('component', 'button'),
                    'name' => 'Button',
                    'available_from' => '2026-01-20',
                ],
                [
                    'url' => route('component', 'card'),
                    'name' => 'Card',
                    'available_from' => null,
                ],
                [
                    'url' => route('component', 'carousel'),
                    'name' => 'Carousel',
                    'available_from' => null,
                ],
                [
                    'url' => route('component', 'chart'),
                    'name' => 'Chart',
                    'available_from' => null,
                ],
                [
                    'url' => route('component', 'checkbox'),
                    'name' => 'Checkbox',
                    'available_from' => '2026-01-20',
                ],
                [
                    'url' => route('component', 'collapsible'),
                    'name' => 'Collapsible',
                    'available_from' => '2026-01-20',
                ],
                [
                    'url' => route('component', 'command'),
                    'name' => 'Command',
                    'available_from' => null,
                ],
                [
                    'url' => route('component', 'context-menu'),
                    'name' => 'Context Menu',
                    'available_from' => null,
                ],
                [
                    'url' => route('component', 'data-table'),
                    'name' => 'Data Table',
                    'available_from' => null,
                ],
                [
                    'url' => route('component', 'dialog'),
                    'name' => 'Dialog',
                    'available_from' => null,
                ],
                [
                    'url' => route('component', 'drawer'),
                    'name' => 'Drawer',
                    'available_from' => null,
                ],
                [
                    'url' => route('component', 'dropdown-menu'),
                    'name' => 'Dropdown Menu',
                    'available_from' => null,
                ],
                [
                    'url' => route('component', 'field'),
                    'name' => 'Field',
                    'available_from' => null,
                ],
                [
                    'url' => route('component', 'input-group'),
                    'name' => 'Input Group',
                    'available_from' => null,
                ],
                [
                    'url' => route('component', 'input-otp'),
                    'name' => 'Input OTP',
                    'available_from' => null,
                ],
                [
                    'url' => route('component', 'input'),
                    'name' => 'Input',
                    'available_from' => '2026-01-20',
                ],
                [
                    'url' => route('component', 'kbd'),
                    'name' => 'Kbd',
                    'available_from' => '2026-01-20',
                ],
                [
                    'url' => route('component', 'label'),
                    'name' => 'Label',
                    'available_from' => '2026-01-20',
                ],
                [
                    'url' => route('component', 'navigation-menu'),
                    'name' => 'Navigation Menu',
                    'available_from' => null,
                ],
                [
                    'url' => route('component', 'pagination'),
                    'name' => 'Pagination',
                    'available_from' => null,
                ],
                [
                    'url' => route('component', 'popover'),
                    'name' => 'Popover',
                    'available_from' => null,
                ],
                [
                    'url' => route('component', 'progress'),
                    'name' => 'Progress',
                    'available_from' => null,
                ],
                [
                    'url' => route('component', 'radio'),
                    'name' => 'Radio',
                    'available_from' => '2026-01-20',
                ],
                [
                    'url' => route('component', 'select'),
                    'name' => 'Select',
                    'available_from' => '2026-01-20',
                ],
                [
                    'url' => route('component', 'separator'),
                    'name' => 'Separator',
                    'available_from' => '2026-01-20',
                ],
                [
                    'url' => route('component', 'sheet'),
                    'name' => 'Sheet',
                    'available_from' => null,
                ],
                [
                    'url' => route('component', 'sidebar'),
                    'name' => 'Sidebar',
                    'available_from' => null,
                ],
                [
                    'url' => route('component', 'skeleton'),
                    'name' => 'Skeleton',
                    'available_from' => null,
                ],
                [
                    'url' => route('component', 'slider'),
                    'name' => 'Slider',
                    'available_from' => null,
                ],
                [
                    'url' => route('component', 'sonner'),
                    'name' => 'Sonner',
                    'available_from' => null,
                ],
                [
                    'url' => route('component', 'spinner'),
                    'name' => 'Spinner',
                    'available_from' => null,
                ],
                [
                    'url' => route('component', 'switch'),
                    'name' => 'Switch',
                    'available_from' => null,
                ],
                [
                    'url' => route('component', 'table'),
                    'name' => 'Table',
                    'available_from' => '2026-01-20',
                ],
                [
                    'url' => route('component', 'tabs'),
                    'name' => 'Tabs',
                    'available_from' => '2026-01-20',
                ],
                [
                    'url' => route('component', 'textarea'),
                    'name' => 'Textarea',
                    'available_from' => '2026-01-20',
                ],
                [
                    'url' => route('component', 'toggle-group'),
                    'name' => 'Toggle Group',
                    'available_from' => null,
                ],
                [
                    'url' => route('component', 'tooltip'),
                    'name' => 'Tooltip',
                    'available_from' => null,
                ],
                [
                    'url' => route('component', 'typography'),
                    'name' => 'Typography',
                    'available_from' => '2026-01-20',
                ],
            ],
        ];
    }
}
