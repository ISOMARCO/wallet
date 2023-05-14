<?php
class InternalMigrateUsers extends ZN\Database\Migration
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
            'Uid' => [DB::varchar(20),DB::unique(),DB::notNull()],
			'Username' => [DB::varchar(20),DB::unique(),DB::null()],
			'Name' => [DB::varchar(20),DB::null()],
			'Surname' => [DB::varchar(20),DB::null()],
			'Password' => [DB::varchar(200),DB::null()],
			'Ban' => [DB::tinyInt(1),DB::null(),DB::defaultValue('2')],
			'Role' => [DB::varchar(10),DB::defaultValue('USER')]
		]);
	}

	# Down
	public function down()
	{
		# Default Query
		return $this->dropTable();
	}
}