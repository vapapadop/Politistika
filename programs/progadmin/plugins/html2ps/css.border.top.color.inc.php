<?php
// $Header: /cvsrepos/html2ps/css.border.top.color.inc.php,v 1.1 2008/07/01 12:30:24 sergey Exp $

class CSSBorderTopColor extends CSSSubProperty {
  function CSSBorderTopColor(&$owner) {
    $this->CSSSubProperty($owner);
  }

  function setValue(&$owner_value, &$value) {
    $owner_value->top->setColor($value);
  }

  function getValue(&$owner_value) {
    return $owner_value->top->color->copy();
  }

  function getPropertyCode() {
    return CSS_BORDER_TOP_COLOR;
  }

  function getPropertyName() {
    return 'border-top-color';
  }

  function parse($value) {
    if ($value == 'inherit') {
      return CSS_PROPERTY_INHERIT;
    }

    return parse_color_declaration($value);
  }
}

?>