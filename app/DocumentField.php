<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentField extends Model
{
    //
	protected $table = 'document_fields';
	
	protected $primaryKey = 'document_fields_id';
	
	// public $timestamps = false;	
	
    protected $guarded = [];
}