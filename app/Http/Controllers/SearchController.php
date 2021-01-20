<?php

namespace App\Http\Controllers;

use App\News;
use App\Page;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SearchController extends Controller
{
    public function search(Request $request){
        if($request->isMethod('post')) {

            $this->validate($request, ['search' => 'required|min:4'] );

            $query = $request->input('search');
            $page = Page::active()->search($query)->get();
            $news = News::active()->search($query)->get();
           // $post = json_decode(Post::search($query)->get());


           $result = collect();
           $result = $result->merge($page)->merge($news);

            return view('search', ['query' => $query, 'results' => $result]);
        }
    }

}
