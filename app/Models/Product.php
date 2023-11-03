<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property-read  int              $id
 * @property       string           $name
 * @property       float            $price
 * @property       string           $url_key
 * @property-write string|null      $description
 * @property-write string           $image_path
 * @property-write boolean          $sale
 * @property-read  Carbon           $created_at
 * @property       Carbon|null      $updated_at
 */

class Product extends Model
{
}
