<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document_fields extends Model
{
    protected $casts = [
        'id' => 'int',
        'doc_json' => 'array'
    ];

    protected $fillable = [
        'doc_json', 'updated_at'
    ];
}
