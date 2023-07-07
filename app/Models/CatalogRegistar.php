<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatalogRegistar extends Model
{

    use HasFactory;

    protected $fillable = [
        'si_no',
        'office_name',
        'bohi_name',
        'opening_date',
        'balam_no',
        'balam_year',
        'deed_number_book',
        'close_date_book',
        'write_page_no',
        'unwrite_page_no',
        'sending_date_thana',
        'reciving_date_thana',
        'kamra_no',
        'rack_no',
        'self_no',
        'comment',

    ];



}
