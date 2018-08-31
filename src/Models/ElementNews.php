<?php

namespace ATW\ElementalNews\Models;

use ATW\ElementalBase\Models\BaseElement;


class ElementNews extends BaseElement
{
    private static $icon = 'font-icon-block-content';

    private static $db = [
        'Text' => 'HTMLText'
    ];

    private static $table_name = 'ElementNews';

    private static $singular_name = 'news element';

    private static $plural_name = 'news elements';

    private static $description = 'news element';

    public function getType()
    {
        return _t(__CLASS__ . '.BlockType', 'News');
    }

    public function getNews() {
        return News::get();
    }
}
