<?php namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;

class Art extends Model {

    protected $table="blog";
    protected $fillable=['name','title','text','active','id_user'];

    public function blog_comments()
    {
        return $this->hasMany('App\Models\Blog\Comments','id_blog');
    }

}
