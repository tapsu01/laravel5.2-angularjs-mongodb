# laravel5.2-angularjs-mongodb<br>
First, make sure that you have installed MongoDB, php mongodb driver.<br />
After, create collection in mongodb<br />
1. Route for homepage<br />
Route::get('/sitepoint', function(){<br />
    return view('sitepoint.index');<br />
});<br />
2. Route for api backend<br />
Route::resource('/sitepoint/books', 'BookController');<br />
<br />
3. Route for view use angularjs (resources/views/sitepoint/partials)<br />
Route::group(array('prefix'=>'/sitepoint/partials/'),function(){<br />
    Route::get('{partials}', array( function($partials)<br />
    {<br />
        $partials = str_replace(".html","",$partials);<br />
        View::addExtension('html','php');<br />
        return View::make('sitepoint.partials.'.$partials);<br />
    }));<br />
});<br />
<br />
author: Nguyen Tu<br />
created_at: 10/07/2016<br />
email: nguyenminhtu.nguyen@gmail.com<br />
I'm happy if I get more comments from you. thank you!<br />
