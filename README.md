# hauntpet/theme
The base package used to build a custom Haunt theme.

## Documenation
### Installation
```bash
composer require hauntpet/theme
```

### Build
```php
Repository::add($key, [
    // metadata
], [
    // options
]);
```

### Options
Options can be added as the 3rd parameter of the `add` function.

#### Menus
By default there is always a `primary` menu.
```php
'menus' => [
    'secondary' => 'Secondary Menu',
]
```
