<?php
class InternalMigrateSystem_Settings extends ZN\Database\Migration
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
			'Default_Language' => [DB::varchar(4),DB::null(),DB::defaultValue('az')],
			'Languages' => [DB::longText(),DB::null(),DB::defaultValue(json_encode(['en']))]
		]);
	}

	# Down
	public function down()
	{
		# Default Query
		return $this->dropTable();
	}
}