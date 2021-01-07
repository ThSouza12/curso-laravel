<?php

Route::get('/login', function () {
    return 'Login';
})->name('login');


Route::middleware([])->group(function () {
    
    Route::prefix('admin')->group(function () {
        
        Route::get('/dashboard', 'AdminTesteController@teste');
    
        Route::get('/financeiro', 'AdminTesteController@teste');
    
        Route::get('/produtos','AdminTesteController@teste' );

        Route::get('/','AdminTesteController@teste' );
    });
});




Route::get('redirect3', function () {
    return redirect()->route('url.name');
});

// route('url.name');

Route::get('/nome-url', function () {
    return 'hey hey hey';
})->name('url.name');

Route::view('/view', 'welcome', ['id' => 'teste']);

Route::redirect('/redirect', '/redirect2' );

// Route::get('redirect1', function () {
//     return redirect('/redirect2');
// });

Route::get('redirect2', function () {
    return 'redirect 02';
});

Route::get('/produtos/{idProduct?}', function ($idProduct = '') {
    return "produto(s) {$idProduct}";
});

Route::get('/categoria/{flag}/posts', function ($flag) {
    return "posts da categoria:{$flag}";
});

Route::get('/categorias/{flag}', function ($prm1) {
    return "produtos da categoria:{$prm1}";
});

Route::match(['get', 'post'], '/match', function () {
    return 'Match';
});

Route::any('/any', function () {
    return 'any';
});    
Route::post('/register', function () {
        return '';
    });

Route::get('/empresa', function () {
    return view ('site.contact');
});
   
Route::get('/contato', function () {
    return 'Contato';
});

Route::get('/', function () {
    return view('welcome');
});
