<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = "documents";

    protected $fillable = ['id','document_name','upload'];

    public function documentsinfo()
    {
        return $this->hasMany('App\DocumentInfo');
    }
}
