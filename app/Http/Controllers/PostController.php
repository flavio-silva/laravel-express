<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    public function index()
    {
        $posts = [];

        for($i=0; $i<= 10; $i++) {
            $post = new \stdClass();
            $post->title = 'Lorem ipsum';
            $post->content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod efficitur sapien at volutpat. In tempus sem ut lorem vulputate consequat. Donec efficitur fringilla lacinia. Aenean nec felis arcu. Etiam tellus lorem, condimentum sit amet vulputate in, volutpat sit amet felis. Sed vulputate, sem id sollicitudin auctor, leo orci feugiat est, in aliquet lorem odio quis leo. Nullam a tortor libero.';
            $post->updated_at = (new \DateTime())->format('d/m/Y h:i');
            $posts[] = $post;
        }

        return view('post.index', ['posts' => $posts]);
    }
}
