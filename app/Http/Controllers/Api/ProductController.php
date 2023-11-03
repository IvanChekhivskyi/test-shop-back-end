<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Doctrine\DBAL\Schema\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(): array
    {
        return Product::all()->toArray();
    }

    public function show(string $key): array
    {
        return Product::where('url_key', $key)->firstOrFail()->toArray();
    }
}
