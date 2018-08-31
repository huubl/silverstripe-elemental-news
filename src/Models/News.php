<?php
namespace ATW\ElementalNews\Models;

use SilverStripe\Versioned\Versioned;
use SilverStripe\Forms\DropdownField;
use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;

class News extends DataObject {

    private static $extensions = [
        Versioned::class,
    ];

    private static $db = [
        "Title" => "Varchar(255)",
        "Date" => "Date",
        "Description" => "Text",
    ];

    private static $has_one = [
        "Image" => Image::class,
        "Category" => NewsCategory::class,
    ];

    private static $owns = [
        'Image'
    ];

    private static $default_sort = "Date DESC";

    private static $field_labels = [
        "Title" => "Title",
        "Date" => "Date",
        "Description" => "Short Description",
    ];

    private static $summary_fields = array(
        "Date" => "Date",
        "CMSThumbnail" => "Image",
        "Title" => "Title",
    );

    private static $table_name = 'News';

    private static $singular_name = 'news';

    private static $plural_name = 'news';

    private static $description = 'news';

    private static $searchable_fields = array(
        "Date",
        "Title",
        "Description",
    );

    // this function creates the thumnail for the summary fields to use
    public function getCMSThumbnail() {
        if($image = $this->Image())
            return $image->CMSThumbnail();
    }

    public function getCMSFields() {
        $this->beforeUpdateCMSFields(function(FieldList $fields) {
            $category_field = $fields->dataFieldByName("CategoryID");
            if($category_field->getSourceEmpty())
                $fields->removeByName("CategoryID");
//            $fields->fieldByName("Image")->setFolderName("news");
//        $category_map = [];
//        if($categories = Category::get()) {
//            $category_map = $categories->map();
//        }
//        $fields->replaceField("Category", new DropdownField("CategoryID", "Kategorie", $category_map));
        });
        return parent::getCMSFields();

        return $fields;
    }

    public function GetLink() {
        //Link to NewsArchive
//        if($category = $this->Category()) {
//            return $category->Link("news/").$this->ID;
//        }
    }

}