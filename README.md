# Laravle Nova 4 Tooltip field

A Laravel Nova Tooltip field for the index view.

When you want to show additional data but do not want to clutter the table, put it in a tooltip.

Inspired by: https://github.com/philperusse/nova-tooltip-field

## Demo

![Demo #1](http://g.recordit.co/hqEr9eP8kW.gif)

## Installation

Run this command in your Laravel Nova project:

```shell 
$ composer require ideatocode/nova-tooltip-field
```

## Usage

Use this field as any other fields. By design, this field will only be shown on index (lists) views.

```php
use Ideatocode\NovaTooltipField\Tooltip;

 Tooltip::make('More', function(){
    return 'This a tooltip. You can put lengthy content here or any additional info.';
 }),

```

#### HTML

You can also pass HTML to the tooltip.

```php
Tooltip::make('More', function(){
	return '<h4>Additional User info</h4>'
		. ' <strong>Created at : </strong>' . Carbon::parse($this->created_at)->diffForHumans()
		. '<br>'
		.' <strong>Updated at : </strong>' . Carbon::parse($this->created_at)->diffForHumans();
})->asHtml(),
```

![Demo #2](http://g.recordit.co/w7on2lofcA.gif)


#### Trigger element

You can also pass change the trigger element of the tooltip.

```php
Tooltip::make('More', function(){
	return '<h4>Additional User info</h4>'
		. ' <strong>Created at : </strong>' . Carbon::parse($this->created_at)->diffForHumans()
		. '<br>'
		.' <strong>Updated at : </strong>' . Carbon::parse($this->created_at)->diffForHumans();
})->asHtml()->trigger('oh <b>Ya!</b>'),
```

### Contributions

All contributions are welcomed. Please send a PR.



### Authors

* Alexandru Eftimie <alexandru@ideatocode.tech> - <https://ideatocode.tech>
* Philippe Pérusse <philippe.perusse@outlook.com>

The styles are based on [Bootstrap's Tooltip component](https://github.com/twbs/bootstrap/blob/v4-dev/scss/_tooltip.scss).

### License

This package is open-sourced software licensed under the [MIT Licence](https://github.com/philperusse/nova-tooltip-field/blob/master/LICENSE)