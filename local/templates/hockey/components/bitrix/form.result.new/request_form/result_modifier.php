<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arResult['funcGetInputHtml'] = function($question, $arrVALUES, $namepole) {
    $id = $question['STRUCTURE'][0]['ID'];
    $type = $question['STRUCTURE'][0]['FIELD_TYPE'];
    $name = "form_{$type}_{$id}";
    $value = isset($arrVALUES[$name]) ? htmlentities($arrVALUES[$name]) : '';
    $required = $question['REQUIRED'] === 'Y' ? 'required' : '';
    switch ($namepole)
    {
        case 'Имя':
            $input = "<input  id=\"contact-feedback-name\" name=\"{$name}\" type=\"text\"  {$required} value=\"{$value}\">";
            break;

        // case 'text':
        case 'Почта':
            $input = "<input id=\"contact-feedback-email\" name=\"{$name}\" type=\"email\"  {$required} value=\"{$value}\">";
            break;
        case 'Сообщение':
            $input = "<textarea id=\"contact-feedback-message\" name=\"{$name}\" type=\"email\"  {$required} >{$value}</textarea>";
            break;
        default:
            $input ='';
            break;
    }

    return $input;
};