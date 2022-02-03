<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{   
	protected $guarded =[];

	public function profileImage(){
		$ImagePath =($this->image) ? $this->image:'/profile/l2kIUCTgXyIujOLCR1Qpnuna8hSauEuHb6srm.jpg';
		return '/storage/'.$ImagePath;
	}
	public function followers(){
		return $this->belongsToMany(User::class);
	}
    public function user(){
    	return $this->belongsTo(User::class);
    }
}
