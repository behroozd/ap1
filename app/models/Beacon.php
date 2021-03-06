<?php

//use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
//use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Beacon extends Mongap implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'beacons';

	
  public function company() {
    return $this->belongsTo('Company');
  }

}

