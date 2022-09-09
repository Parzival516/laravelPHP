Route::get('products', 'ProductController@index')->name('products.index');
  
Route::get('products/create-step-one', 'ProductController@createStepOne')->name('products.create.step.one');
Route::post('products/create-step-one', 'ProductController@postCreateStepOne')->name('products.create.step.one.post');
  
Route::get('products/create-step-two', 'ProductController@createStepTwo')->name('products.create.step.two');
Route::post('products/create-step-two', 'ProductController@postCreateStepTwo')->name('products.create.step.two.post');
  
Route::get('products/create-step-three', 'ProductController@createStepThree')->name('products.create.step.three');
Route::post('products/create-step-three', 'ProductController@postCreateStepThree')->name('products.create.step.three.post');