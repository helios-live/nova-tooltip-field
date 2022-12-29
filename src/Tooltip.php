<?php

namespace Ideatocode\NovaTooltipField;

use Laravel\Nova\Fields\Field;

class Tooltip extends Field
{
  public $showOnIndex = true;
  public $showOnDetail = false;
  public $showOnCreation = false;
  public $showOnUpdate = false;

  public $component = 'nova-tooltip-field';

  /**
   * Indicates if the field value should be displayed as HTML.
   *
   * @var bool
   */
  public $asHtml = false;

  /**
   * Indicates if the field value should have a custom trigger.
   *
   * @var bool
   */
  public $trigger = false;

  /**
   * Allows the tootip to be added on a text.
   *
   * @param string  $text
   * @return $this
   */
  public function text($text)
  {
    return $this->withMeta(['text' => $text]);
  }

  /**
   * Display the field as raw HTML using Vue.
   *
   * @return $this
   */
  public function asHtml()
  {
    $this->asHtml = true;

    return $this;
  }
  /**
   * Allows the tootip to be added on a text.
   *
   * @param string  $html
   * @return $this
   */
  public function trigger($html)
  {
    $this->trigger = $html;
    return $this;
  }
  /**
   * Prepare the element for JSON serialization.
   *
   * @return array<string, mixed>
   */
  public function jsonSerialize(): array
  {
    return array_merge(parent::jsonSerialize(), [
      'asHtml' => $this->asHtml,
      'trigger' => $this->trigger,
    ]);
  }
}