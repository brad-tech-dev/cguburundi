<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class BlogController extends Controller
{
    public function index()
    {
        Carbon::setLocale('fr');
        $posts = [];
        $response = Http::get('blog.cguburundi.bi/wp-json/wp/v2/posts', ['_embed' => true]);
        if ($response->successful()) {
            $posts = json_decode($response->body());
        }

        return view('blog.index', ['posts' => $posts]);
    }

    public function viewPost(Request $request, $slug)
    {
        Carbon::setLocale('fr');
        $response = Http::get('blog.cguburundi.bi/wp-json/wp/v2/posts', [
            '_embed' => true,
            'query' => [
                'filter' => [
                    'name' => $slug
                ]
            ]
        ]);

        if ($response->successful()) {

            $data = json_decode($response->body());

                    $post = $data[0];

                    return view('blog.post', ['post' => $post]);
        } else {
            abort(404, "Could not find the page you're looking for");
        }
    }
}
