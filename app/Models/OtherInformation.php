<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherInformation extends Model
{
    use HasFactory;
    protected $table = "other_informations";
    protected $guarded = [];
    public $timestamps = false;
}
