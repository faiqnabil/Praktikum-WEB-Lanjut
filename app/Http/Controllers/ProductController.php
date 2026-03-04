<?php
namespace App\Http\Controllers;
class ProductController extends Controller {
    public function foodBeverage() { return "Daftar Produk: Food & Beverage"; }
    public function beautyHealth() { return "Daftar Produk: Beauty & Health"; }
    public function homeCare() { return "Daftar Produk: Home Care"; }
    public function babyKid() { return "Daftar Produk: Baby & Kid"; }
}