<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
class Url extends Model {
	
	protected $id;
	protected $fillable = ['id','long','short'];

	public function __construct(array $attributes = array()) {
		parent::__construct($attributes);
		$table = 'urls';
	}
	
	public static function saveUrl($request){
		$val['long'] = $request->input('longUrl');
		$val['short'] = time();
		
		return self::Create($val);
	}

	public static function getBy($attributes){
		return self::firstByAttributes($attributes);
	}
}
?>