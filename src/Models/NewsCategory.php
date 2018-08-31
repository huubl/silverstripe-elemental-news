<?php
namespace ATW\ElementalNews\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\FieldList;


class NewsCategory extends DataObject {

    private static $db = [
        "Title" => "Varchar(255)",
        "Sort" => "Int"
    ];

    private static $table_name = 'NewsCategory';

    private static $singular_name = 'news category';

    private static $plural_name = 'news categories';

    private static $description = 'news category';

    public function getCMSFields() {
        $this->beforeUpdateCMSFields(function(FieldList $fields) {
            $fields->removeByName("Sort");
        });
        return parent::getCMSFields();
    }


}
