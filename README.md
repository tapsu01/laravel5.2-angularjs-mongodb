# laravel5.2-angularjs-mongodb<br>
First, make sure that you have installed MongoDB, php mongodb driver.
After, create collection in mongodb
1. Route for homepage
Route::get('/sitepoint', function(){
    return view('sitepoint.index');
});
2. Route for api backend
Route::resource('/sitepoint/books', 'BookController');

3. Route for view use angularjs (resources/views/sitepoint/partials)
Route::group(array('prefix'=>'/sitepoint/partials/'),function(){
    Route::get('{partials}', array( function($partials)
    {
        $partials = str_replace(".html","",$partials);
        View::addExtension('html','php');
        return View::make('sitepoint.partials.'.$partials);
    }));
});

author: Nguyen Tu
created_at: 10/07/2016
email: nguyenminhtu.nguyen@gmail.com
I'm happy if I get more comments from you. thank you!
