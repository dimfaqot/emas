<?php

namespace App\Controllers;

class Guest extends BaseController
{
    public function product(): string
    {
        return view('public/product', ['judul' => menu()['menu']]);
    }
    public function contact(): string
    {
        return view('public/contact', ['judul' => menu()['menu']]);
    }
    public function news(): string
    {
        return view('public/news', ['judul' => menu()['menu']]);
    }
}
