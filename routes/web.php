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
Route::get('/Dc/index', function () {
    $DcCard = config("comics");

    return view("Dc.index", compact("DcCard"));
})->name("Dc.index");







Route::get('/Dc/{id}', function($id){

        $currentCardDc = config("comics");
        $DcCardSelected = null;

       foreach ($currentCardDc as $DcCard) {
        if($DcCard["id"] === intval($id)){
            $DcCardSelected = $DcCard;
            break;
        }
        };
        
        if(is_null($DcCardSelected)){
            abort(404);
        };
        return view("Dc.show" , [
            "DcCard" =>$DcCardSelected
        ]);

})->name("Dc.show");

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