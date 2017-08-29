<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    Protected $fillable=['date','category','title','location','condition','pre_tax_amount','tax_name','tax_anount'];
}
