<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreProduct;
use App\Http\Requests\UpdateProductRequest;
class ProductController extends Controller
{
    //
	public function index(){
		$all_products = \DB::table('product_reviews')->get();
		return view('index',['products'=>$all_products]);
	}

	public function create(){
		return view('create');
	}

	public function show($id){
		$product = \DB::table('product_reviews')->where('id','=',$id)->first();
		if(!$product){
			abort(404);
		}
		return view('detail',compact('product'));
	}

	public function store(StoreProduct $request){
    	// $request_data = $request->all();
    	// unset($request_data['_token']);
		$name = $request->product_name;
		$review = $request->review;

		$result = \DB::table('product_reviews')->insert([
			'product_name' => $name,
			'review'	=> $review,
			'votes'		=> 0
		]);
		if($result){
			return redirect()->route('products.index');
		}
		
	}
	public function edit($id){
		$product  = \DB::table('product_reviews')->where('id','=',$id)->first();
		return view('edit',compact('product'));
	}

	public function update(UpdateProductRequest $request,$id){
		$request_product = $request->all();
		unset($request_product['_token']);
		$result = \DB::table('product_reviews')->where('id','=',$id)->update($request_product);
		if($result){
			return redirect()->route('products.show',['id'=>$id]);
		}else{
			return "Data Failed";
		}
	}

	public function vote(Request $request){
		$id = $request->pro_id;
		$products = \DB::table('product_reviews')->where('id','=',$id)->first();
		
		if(isset($_POST['upvote'])){
			$x= $products->votes + 1;
			$upVote = \DB::table('product_reviews')->where('id','=',$id)->update(['votes'=>$x]);

			
		}elseif(isset($_POST['downvote']) && $products->votes > 0 ){
			$x= $products->votes - 1;
			$downvote = \DB::table('product_reviews')->where('id','=',$id)->update(['votes'=>$x]);
		}
		return redirect()->route('products.show',['id'=>$id]);
	}
}
