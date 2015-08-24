<?php
namespace Directory\Services\Site\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SiteDatabaseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('Directory\Services\Site\Database\Seeds\FoobarTableSeeder');
	}

}
