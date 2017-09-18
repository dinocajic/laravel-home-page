<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Index;

class IndexController extends Controller {

    /**
     * Displays the main page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        $data['title']         = 'Dino Cajic';
        $data['description']   = 'Dino Cajic is a web-developer and Georgia State University Student.';

        $data['about_images']  = Index::getAboutImages();
        $data['family_images'] = Index::getFamilyImages();

        return view('index.index', compact('data'));
    }
}