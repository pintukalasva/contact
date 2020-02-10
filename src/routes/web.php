<?php
	$namespace = "Bitfumes\Contact\Http\Controllers";
	use Illuminate\Http\Request;
	Route::group(['namespace' => $namespace], function(){
		Route::get('contact' , "ContactController@index")->name('contact');
	});
	

	Route::post('contact' , function(Request $request){
		return $request->all();
	});

?>