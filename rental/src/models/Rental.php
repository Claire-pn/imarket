<?php

namespace Increment\Imarket\Rental\Models;
use Illuminate\Database\Eloquent\Model;
use App\APIModel;
use Carbon\Carbon;
class Rental extends APIModel
{
    protected $table = 'rentals';
    protected $fillable = ['code', 'account_id', 'product_id', 'merchant_id', 'start', 'end', 'status'];
}
