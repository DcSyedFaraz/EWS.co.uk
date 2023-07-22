<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use NunoMaduro\Collision\Adapters\Phpunit\Style;

class Order extends Model
{
    public $table = 'orders';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'id',
        "paper_topic",
        "paper_type",
        "deadline",
        "subject_area",
        "number_of_pages",
        "academic_level",
        "reference",
        "style",
        "cost_per_page",
        "total_price",
        "detail",
        "name",
        "email",
        "country",
        "phone",
        "language",
        "spacing",
        "is_complete",
        'status_id',
        'user_id',
    ];

    public function files()
    {
        return $this->hasMany(File::class);
    }

    public function deadlineOrder()
    {
        return $this->belongsTo(Deadline::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class, "subject_area", "id");
    }

    public function paperType()
    {
        return $this->belongsTo(PaperType::class, "paper_type", "id");
    }

    public function invoice(){
        return $this->hasOne(Invoice::class,'id');
    }

    public function styleFunc()
    {
        return $this->belongsTo(RefrenceStyle::class, "name", "id");
    }

    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }

    public function status(){
        return $this->belongsTo(Status::class,'status_id','id');
    }

}
