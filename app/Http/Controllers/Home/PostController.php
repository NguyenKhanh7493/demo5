<?php namespace App\Http\Controllers\Home;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getPost(){
	    $post = Post::select('id','name','alias','avatar','intro','content','created_at')->get()->toArray();
	    return view('home.post.list',compact('post'));
    }
    public function getDetailPost($id){
        $chitiet = DB::table('posts')->where('id',$id)->first() ;
        return view('home.post.detail',compact('chitiet'));
    }
}
