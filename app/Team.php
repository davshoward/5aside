<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model {

	public function players()
	{
		return $this->belongsToMany('App\Player');
	}

	public function match()
	{
		return $this->belongsTo('App\Match');
	}

	public function result()
	{
		if ($this->winners) {
			return 'Win';
		}

		if ($this->draw) {
			return 'Draw';
		}

		return 'Loss';
	}
}