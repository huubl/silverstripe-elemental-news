<?php
namespace ATW\ElementalNews\Controllers;

use SilverStripe\Control\HTTPRequest;
use ATW\ElementalNews\Models\News;
use PageController;

class NewsArchiveController extends PageController {

    private static $allowed_actions = [
        "view"
    ];

    public function view(HTTPRequest $request) {
        $id = $request->param("ID");
        return [
            "News" => News::get_by_id($id)
        ];
    }

}