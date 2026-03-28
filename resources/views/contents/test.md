# Button

Displays a button or a component that looks like a button

- [Installation](#installation)
- [Usage](#usage)
- [Reference](#reference)

```blade +parse
<x-playground path="examples/components/button/hero.blade.php" />
```

<a name='installation'></a>
#### Installation

```shell
php artisan ui:add button
```

<a name='usage'></a>
#### Usage

```blade
<x-ui.button variant="outline" size="sm">Save</x-ui.button>
```

<a name='reference'></a>
#### Reference

The `x-ui.button` component is a wrapper around the `button` element that adds a variety of styles and functionality.


| Props     | Type                                                                                                  | Default     |
|-----------|-------------------------------------------------------------------------------------------------------|-------------|
| `variant` | `"default"` \| `"outline"` \| `"ghost"` \| `"destructive"` \| `"secondary"` \| `"link"` \| `"simple"` | `"default"` |


