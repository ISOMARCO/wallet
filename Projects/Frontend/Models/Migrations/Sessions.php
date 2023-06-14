<?php
class InternalMigrateSessions extends ZN\Database\Migration
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
            'Ip_Address' => [DB::varchar(20), DB::null()],
            'User_Agent' => [DB::varchar(255), DB::null()],
            'User' => [DB::varchar(30),DB::null()]
		]);
	}

	# Down
	public function down()
	{
		# Default Query
		return $this->dropTable();
	}
}