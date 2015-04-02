<?php namespace App\Models;

class Post extends BaseModel {

	protected $fillable=['title','content'];

	public function user(){
		return $this->belongsTo('\App\Models\User');
	}
	public function comments(){
		return $this->hasMany('\App\Models\Comment');
	}

}
