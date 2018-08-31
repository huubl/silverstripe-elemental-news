<?php
namespace ATW\ElementalNews\Models;

use Page;

class NewsArchive extends Page {

    private static $table_name = 'NewsArchive';

    private static $singular_name = 'news archive';

    private static $plural_name = 'news archives';

    private static $description = 'news archive';

    public function getControllerName() {
        return "ATW\ElementalNews\Controllers\NewsArchiveController";
    }

    public function GetNews() {
        //TODO: Yearfilter, Newsfilter
        return News::get();
    }
}