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
			'Id' => [DB::int(11), DB::primaryKey(), DB::autoIncrement()],
            'Uid' => [DB::varchar(20),DB::unique(),DB::notNull(),DB::defaultValue(hash(uniqid(),'sha256'))]
		]);
	}

	# Down
	public function down()
	{
		# Default Query
		return $this->dropTable();
	}
}