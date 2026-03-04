<?php
namespace App\Http\Controllers;
class UserController extends Controller {
    public function profile($id, $name) {
        return "Profil Pengguna - ID: " . $id . " | Nama: " . $name;
    }
}