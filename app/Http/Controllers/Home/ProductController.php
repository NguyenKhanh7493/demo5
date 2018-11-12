<?php namespace App\Http\Controllers\Home;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProductController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getSearch($cate,$key)
	{
	    $data['title']          = "Tìm kiếm từ khóa {$key}";
	    $data['keyword']        = "từ khóa";
	    $data['description']    = "từ khóa";
	    $search['cate']         = $cate;
	    $search['key']          = $key;
	    return view('home.product.search',compact('data','search'));
	}
	public function getList($cate,$text)
	{
	    $data['title']          = "Danh sách sản phẩm";
	    $data['keyword']        = "từ khóa";
	    $data['description']    = "từ khóa";

	    return view('home.product.list',compact('data'));
	}
	public function getDetail($cate,$text)
	{
	    $data['title']          = "Danh sách sản phẩm";
	    $data['keyword']        = "từ khóa";
	    $data['description']    = "từ khóa";

	    return view('home.product.detail',compact('data'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
