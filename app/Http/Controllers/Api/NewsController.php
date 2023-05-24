<?php

namespace App\Http\Controllers\Api;

use App\Models\post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\NewsResource;

class NewsController extends Controller
{
    public function showNews() {

        $news = post::with(['category','tags'])->get();

        return  NewsResource::collection($news);
    }
}
