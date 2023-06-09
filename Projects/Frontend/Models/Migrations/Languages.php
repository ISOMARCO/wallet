<?php
class InternalMigrateLanguages extends ZN\Database\Migration
{
	# Class/Table Name
	const table = __CLASS__;

	# Up
	public function up()
	{
		# Default Query
		return $this->createTable
		([
			'Id' => [DB::int(11),DB::primaryKey(), DB::autoIncrement(),DB::notNull()],
			'Name' => [DB::varchar(30),DB::null()],
            'Code' => [DB::varchar(5),DB::null()],
			'Active' => [DB::tinyInt(1),DB::defaultValue('1')]
		]);
	}

	# Down
	public function down()
	{
		# Default Query
		return $this->dropTable();
	}
}