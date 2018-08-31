<?php
namespace ATW\ElementalNews\Controllers;

use SilverStripe\Admin\ModelAdmin;

use ATW\ElementalNews\Models\News;
use ATW\ElementalNews\Models\NewsCategory;
use Symbiote\GridFieldExtensions\GridFieldOrderableRows;


class NewsAdmin extends ModelAdmin
{

    private static $managed_models = [
        News::class,
        NewsCategory::class
    ];

    private static $url_segment = 'news';

    private static $menu_title = 'News Admin';

    public function getEditForm($id = null, $fields = null) {
        $form = parent::getEditForm($id, $fields);

        if($this->modelClass == 'NewsCategory') {
            $gridFieldName = $this->sanitiseClassName($this->modelClass);
            $gridField = $form->Fields()->fieldByName($gridFieldName);
            $config = $gridField->getConfig();
            $config->addComponent(new GridFieldOrderableRows('Sort'));
        }
        return $form;
    }
}