<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class News extends Model {

	//
    protected $fillable = [
        'title',
        'content',
        'publish_at'

    ];

    protected $dates = ['publish_at'];

    //scopeName
    public function scopePublished($query)
    {
        $query->where('publish_at','<=',Carbon::now());
    }

    //scopeName
    public function scopeUnPublished($query)
    {
        $query->where('publish_at','>',Carbon::now());
    }

    //setcolumNameAttribute
    public function setPublishAtAttribute($date){
        $this->attributes['publish_at'] = Carbon::createFromFormat('Y-m-d',$date);
    }

    /**
     * A News is owned by a user
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo('App\User');
    }

}
