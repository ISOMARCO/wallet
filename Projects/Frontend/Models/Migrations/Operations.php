<?php
class InternalMigrateOperations extends ZN\Database\Migration
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
            'Document_Number' => [DB::bigInt(20),DB::unique(),DB::notNull()],
            'Category_Uid' => [DB::varchar(30),DB::null()],
			'Amount' => [DB::double(),DB::notNull()]
		]);
	}

	# Down
	public function down()
	{
		# Default Query
		return $this->dropTable();
	}
}