<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use Illuminate\Support\Str;

class AuthorSeeder extends Seeder
{
	function valueOrNull($value) {
		return $value != "" ? $value : null;
	}

	function isDate($value) {
		return preg_match("#^\d{1,2}/\d\d/\d{1,4}$#", $value);
	}

	function getDate($value)
	{
		$reverse = array_reverse( explode('/', $value) );
		return implode('-', array_map( function($v){return str_pad($v, 2, '0', STR_PAD_LEFT);}, $reverse ) );
	}

	function setDateOrYear($model, $attr, $value)
	{
		if  ($this->isDate($value)) {
			$model->{'do' . $attr} = $this->getDate($value);
		} else {
			$model->{'yo' . $attr} = $value;
		}
	}

	public function run()
	{
		$data = file_exists($file = __DIR__ . '/_authors.php')
            ? include($file)
            : include(__DIR__ . '/_authors.example.php');

		foreach ($data as $dt) {
			if ($a = Author::firstWhere('name', $dt['name'])) {

				$a->description = $this->valueOrNull($dt['description']);
				$a->abstract = $this->valueOrNull($dt['abstract']);
				$a->bio = $this->valueOrNull($dt['bio']);

				if (count($dt['bd']) >= 2) {
					$this->setDateOrYear($a, 'b', $dt['bd'][0]);
					$a->pob = $this->valueOrNull($dt['bd'][1]);
				}

				if (count($dt['bd']) == 4) {
					$this->setDateOrYear($a, 'd', $dt['bd'][2]);
					$a->pob = $this->valueOrNull($dt['bd'][3]);
				}

				$a->image = $this->valueOrNull($dt['img']);
				$a->save();
			}
		}

	} // run
} // class
