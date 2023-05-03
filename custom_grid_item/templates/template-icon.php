<?php

if ($props['icon']) {

    $icon = $this->el('span', [

        'class' => [
            'el-image',
            'uk-text-{icon_color}',
            'uk-margin[-{image_margin}]-top {@!image_margin: remove}' => $element['image_align'] == 'between' || ($element['image_align'] == 'bottom' && !($element['panel_style'] && $element['panel_card_image'])),
        ],

        'uk-icon' => [
            'icon: {0};' => $props['icon'],
            'width: {icon_width};',
            'height: {icon_width};',
        ],

    ]);

    echo $icon($element, '');
}
