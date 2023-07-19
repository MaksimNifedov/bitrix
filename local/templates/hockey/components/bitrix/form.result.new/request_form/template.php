<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/* @var array $arParams */
/* @var array $arResult */
/* @global CMain $APPLICATION */
/* @global CUser $USER */
/* @global CDatabase $DB */
/* @var CBitrixComponentTemplate $this */
/* @var string $templateName */
/* @var string $templateFile */
/* @var string $templateFolder */
/* @var string $componentPath */
/* @var CBitrixComponent $component */
?>

<?php if ($arResult["isFormNote"] === "Y"): ?>
    Спасибо, ваша заявка принята!
<?php else: ?>
    <?= $arResult["FORM_HEADER"] = substr_replace($arResult["FORM_HEADER"], ' class="contact-feedback-form" ', 5, 0); ?>
    <input type="hidden" name="web_form_submit" value="Y">

    <h4 class="contact-feedback-form__title"><?= $arResult["FORM_TITLE"] ?></h4>
    <div class="contact-feedback-form__inputs">

        <?php if ($arResult["isFormErrors"] === "Y"): ?>
            <div class="errors">
                <?= $arResult["FORM_ERRORS_TEXT"] ?>
            </div>
        <?php endif; ?>
        <div>
            <label for="contact-feedback-name"
                   class="contact-feedback-form__label"><?= $arResult["QUESTIONS"]['NAME']['CAPTION'] ?></label>
            <?= $arResult['funcGetInputHtml']($arResult["QUESTIONS"]['NAME'], $arResult['arrVALUES'], $arResult["QUESTIONS"]['NAME']['CAPTION']) ?>
        </div>
        <div>
            <label for="contact-feedback-email" class="contact-feedback-form__label">
                <?= $arResult["QUESTIONS"]['EMAIL']['CAPTION'] ?>
            </label>
            <?= $arResult['funcGetInputHtml']($arResult["QUESTIONS"]['EMAIL'], $arResult['arrVALUES'], $arResult["QUESTIONS"]['EMAIL']['CAPTION']) ?>
        </div>
    </div>
    <div class="contact-feedback-form__area">
    <label for="contact-feedback-message" class="contact-feedback-form__label">
        <?= $arResult["QUESTIONS"]['MESSAGE']['CAPTION'] ?>
    </label>
    <?= $arResult['funcGetInputHtml']($arResult["QUESTIONS"]['MESSAGE'], $arResult['arrVALUES'], $arResult["QUESTIONS"]['MESSAGE']['CAPTION']) ?>


    <button class="contact-feedback-form__btn" type="submit"><?= $arResult["arForm"]["BUTTON"] ?></button>

    <?= $arResult["FORM_FOOTER"] ?>
<?php endif; ?>