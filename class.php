<?php


Here is the code to build the table class:
class table {
private $tag ;
function Begin($border=0, $align="center", $width='100%', $cellpadding=2,
$cellspacing=2, $class='', $id='', $bgcolor='', $style='') {
$this->tag = '<table ' ;
if ($align) $this->tag .= 'align="' . $align . '" ' ;
if ($width) $this->tag .= 'width="' . $width . '" ' ;
if ($border > 0) $this->tag .= 'border="' . $border . '" ' ;
if ($cellpadding > 0) $this->tag .= 'cellpadding="' . $cellpadding . '" ' ;
if ($cellspacing > 0) $this->tag .= 'cellspacing="' . $cellspacing . '" ' ;
if ($class) $this->tag .= 'class="' . $class . '" ' ;
if ($id) $this->tag .= 'id="' . $id . '" ' ;
if ($bgcolor) $this->tag .= 'bgcolor="' . $bgcolor . '" ' ;
if ($style) $this->tag .= 'style="' . $style . '" ' ;
$this->tag .= ">" ;
return $this->tag ;
}
function Header($text) {
$this->tag = '<th>' . $text . '</th>' ;
return $this->tag ;
}
function RowOn($align="", $bgcolor="", $class="", $height="") {
$this->tag = '<tr ' ;
if ($align) $this->tag .= 'align="' . $align . '" ' ;
if ($bgcolor) $this->tag .= 'bgcolor="' . $bgcolor . '" ' ;
if ($class) $this->tag .= 'class="' . $class . '" ' ;

if ($height) $this->tag .= 'height="' . $height . '" ' ;
$this->tag .= ">" ;
return $this->tag ;
}
function ColumnOn($colspan=1, $align='left', $width="", $rowspan="",
$bgcolor="", $class="", $valign="", $height="") {
$this->tag = '<td ' ;
if ($align) $this->tag .= 'align="' . $align . '" ' ;
if ($colspan) $this->tag .= 'colspan="' . $colspan . '" ' ;
if ($width) $this->tag .= 'width="' . $width . '" ' ;
if ($rowspan) $this->tag .= 'rowspan="' . $rowspan . '" ' ;
if ($bgcolor) $this->tag .= 'bgcolor="' . $bgcolor . '" ' ;
if ($class) $this->tag .= 'class="' . $class . '" ' ;
if ($height) $this->tag .= 'height"' . $height . '" ';
if ($valign) $this->tag .= "valign='" . $valign . "'>" ;
if (!$valign) $this->tag .= "valign='middle'>" ;
return $this->tag ;
}
function ColumnOff() {
$this->tag = '</td>' ;
return $this->tag ;
}
function RowOff() {
$this->tag = '</tr>' ;
return $this->tag ;
}
function End() {
$this->tag = '</table>' ;
return $this->tag ;
}
} // end class table
Here is the code to build the form class:
class form {
private $tag ;
function Begin($action, $method='post', $name='', $id='', $style='', $class='') {
$this->tag = '<form ' ;
if ($method) $this->tag .= 'method="' . $method . '" ' ;
if ($action) $this->tag .= 'action="' . $action . '" ' ;
if ($name) $this->tag .= 'name="' . $name . '" ' ;
if ($id) $this->tag .= 'id="' . $id . '" ' ;
if ($style) $this->tag .= 'style="' . $style . '" ' ;
if ($class) $this->tag .= 'class="' . $class . '" ' ;
$this->tag .= "><input type='hidden' name='posted' value='1'>" ;
return $this->tag ;
}
function HiddenValue($name, $value="") {
$this->tag = '<input type="' . 'hidden' . '" ' ;


if ($name) $this->tag .= 'name="' . $name . '" ' ;
if ($value) $this->tag .= 'value="' . $value . '" ' ;
$this->tag .= ">" ;
return $this->tag ;
}
function InputLabel($textLabel, $labelFor, $required=false, $class='') {
if ($required == true) $required = "<font color='red'>*</font>";
$this->tag = '<label for="' . $labelFor . '" class="' . $class . '">' ;
$this->tag .= $textLabel . $required;
$this->tag .= ":&nbsp;</label>" ;
return $this->tag ;
}
function Input($InputType, $EntityName, $value="", $align="center", $size="",
$id="", $align="center", $readonly="", $class="",
$onType1="", $onAction1="", $onType2="", $onAction2="",
$onType3="", $onAction3="") {
$this->tag = '<input type="' . $InputType . '" name="' . $EntityName
. '" size="' . $size . '" ' ;
if ($align) $this->tag .= 'align="' . $align . '" ' ;
if ($id) $this->tag .= 'id="' . $id . '" ' ;
if ($value == "on"){
$this->tag .= ' checked ';
} elseif ($value){
$this->tag .= 'value="' . $value . '" ' ;
}
if ($class) $this->tag .= 'class="' . $class . '" ' ;
if ($onType1) $this->tag .= $onType1 . '="' . $onAction1 . '" ' ;
if ($onType2) $this->tag .= $onType2 . '="' . $onAction2 . '" ' ;
if ($onType3) $this->tag .= $onType3 . '="' . $onAction3 . '" ' ;
if ($readonly) $this->tag .= 'readonly ' ;
$this->tag .= ">" ;
return $this->tag ;
}
function Textarea($name, $cols, $rows, $value="", $align="left", $class="",
$readonly="", $onType1="", $onAction1="", $onType2="", $onAction2="",
$onType3="", $onAction3="") {
$this->tag = '<textarea name="' . $name . '" cols="'
. $cols . '" rows="' . $rows . '" ' ;
if ($align) $this->tag .= 'align="' . $align . '" ' ;
if ($class) $this->tag .= 'class="' . $class . '" ' ;
if ($onType1) $this->tag .= $onType1 . '="' . $onAction1 . '" ' ;
if ($onType2) $this->tag .= $onType2 . '="' . $onAction2 . '" ' ;
if ($onType3) $this->tag .= $onType3 . '="' . $onAction3 . '" ' ;
if ($readonly) $this->tag .= 'readonly ' ;
$this->tag .= ">$value</textarea>" ;
return $this->tag ;
}
function form_end(){
return '</form>' ;


}
} // end class form





?>