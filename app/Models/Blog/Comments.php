<?php namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model {

    protected $table="blog_comments";
    protected $fillable=['title','text','active','id_user','id_blog'];

    public function blog()
    {
        return $this->belongsTo('App\Models\Blog\Art','id_blog');
    }

}
