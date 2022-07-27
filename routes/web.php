<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// route home
Route::get('/', function () {
    return view('home');
});


// route for my comics
Route::get('/TheCardDc', function () {
    $DcCard = config("comics");

    return view("CardDc", compact("books"));
})->name("CardDc");

Route::get('/CardDc/{id}', function($id){
       $products = config("comics.php");

//     //filtrare i prodotti e recuperare quello che ha lo stesso id
//     //che voglio ottenere come parametro nell'url
//     //utilizzare nelle callbackfunction use e $id
//     array_filter($products, function($product) use ($id) {
//         return $product["id"] === intval($id);
        // $keys = array_keys($foundProducts);
        // var_dump($keys);
//         var_dump($product);
//     });

// qui non serve usare use perchè non c'è una callback
    // foreach ($products as $i => $product){
    //     if($product["id"] === intval($id)){
    //         $foundProducts = $product;
    //         break;
    //     }
    // };
});