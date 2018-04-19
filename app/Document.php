<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\Pivot;
use App\DocumentField;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\SoftDeletes;

class Document extends Model
{
	protected $table = 'document';
	
    protected $primaryKey = 'document_id';
	
    public function fields() {
        return $this->hasMany('App\DocumentField', 'document_id', 'document_id');
    }
	
    public function status() {
		
		$document_status = $this->fields()->where('document_fields_name', 'document_status')->get([\DB::raw("document_fields_json->>'$.field_value' as field_value")])->first();
		if (!empty($document_status))
			return $document_status->field_value->toArray();
		// dd($document_status);
    }
	
	public function scopeOftype($query, $type)
    {
		return $query->whereHas('type', function ($query) use($type){
				$query->where('document_type_id', '=', $type);
			});
    }

    public function getJson() {
        return $this->hasManyThrough('App\DocumentField', 'App\Document', 'document_id', 'document_id')->select(['document_fields_name', 'document_fields_json']);
    }
}