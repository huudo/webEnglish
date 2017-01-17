<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class Student extends Model {

	//posts table in database
	protected $table = 'student';

	public static function getStudent(){
		$students = Student::orderBy('id', 'DESC')->paginate(5);
		$students->setPath('');
		return $students;
	}

}