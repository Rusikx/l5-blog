<?php namespace App\Models;

class Comment extends BaseModel {

	protected $fillable = ['user_id','post_id','content'];

	public function user(){
		return $this->belongsTo('App\Models\User');
	}
	public function post(){
		return $this->belongsTo('App\Models\Post');
	}


}
