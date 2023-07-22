<?php

namespace App\Http\View\Composers;

use App\Service;
use App\WebSetting;
use App\Blog;
use Illuminate\View\View;

class LayoutComposer
{
    public function compose(View $view)
    {
        $view->with(['services' => Service::orderBy('name', 'ASC')->get(), 'web_setting' => WebSetting::first(),'blogs' => Blog::all()]);
    }
}