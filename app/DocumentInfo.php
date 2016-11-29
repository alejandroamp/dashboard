<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentInfo extends Model
{
    protected $table = "document_info";

    protected $fillable = ['sold_to_part_key','account_name','business_name','country','segment','entity_type',
    'b2b','account_manager','geo','theoldkey1','theoldkey2','order_status','type','user_id','document_id'];

    public function document()
    {
        return $this->belongsTo('App\Document');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
