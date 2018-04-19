<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentType extends Model
{
    //
	protected $table = 'document_type';
	
	protected $primaryKey = 'document_type_id';

	public $timestamps = false;	
	
	public function docs()
    {
        return $this->hasMany('App\Document', 'document_type_id');
    }
}