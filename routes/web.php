<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Product;


// الصفحة الرئيسية
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// الصفحة الرئيسية home
Route::get('/home', function () {
    return view('home');
})->name('home');

// عرض المنتجات
Route::get('/product', function () {
    $products = Product::all();
    return view('product', compact('products'));
})->name('product');

// إضافة منتج باستخدام Controller
Route::post('/panel', [ProductController::class, 'store'])->name('addProduct');

// عرض لوحة التحكم (Admin Panel)
Route::get('/panel', function () {
    $products = Product::select("name", "price", "quantity", "image", "id", "cpu", "ram")->get();
    return view("panel", ["products" => $products]);
})->name('adminpanel');

// حذف منتج
Route::delete('/panel/{id}', function ($id) {
    $product = Product::findOrFail($id);
    $product->delete();
    return redirect()->route('adminpanel');
})->name('deleteProduct');

// تحديث منتج
Route::put('/panel/{id}', function (Request $request, $id) {
    $product = Product::findOrFail($id);
    $product->name = $request->name;
    $product->price = $request->price;
    $product->quantity = $request->quantity;
    $product->ram = $request->ram;
    $product->cpu = $request->cpu;
    $product->save();
    return redirect()->route('adminpanel');
})->name('updateProduct');

Route::post('/panel', function (Request $request) {
    $product = new Product();
    $product->name = $request->name;
    $product->price = $request->price;
    $product->quantity = $request->quantity;
    $product->image = $request->image;
    $product->ram = $request->ram;
    $product->cpu = $request->cpu;
    $product->save();
    return redirect()->route('adminpanel');
})->name('addProduct');


Route::post('/update-quantity', function (Request $request) {
    $product = Product::find($request->productId);
    if ($product && $product->quantity >= $request->quantity) {
        $product->quantity -= $request->quantity;
        $product->save();
        return response()->json(['success' => true]);
    }
    return response()->json(['success' => false, 'message' => 'Not enough quantity available']);
});
