<?php
class InternalMigrateSub_Category extends ZN\Database\Migration
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
            'Uid' => [DB::varchar(30),DB::unique(),DB::notNull()],
            'Category_Uid' => [DB::varchar(30),DB::null()],
			'Parent_Uid' => [DB::varchar(30),DB::null()],
            'Child_Uid' => [DB::varchar(30),DB::null()],
            'User' => [DB::varchar(30),DB::null()],
            'Active' => [DB::tinyInt(1),DB::defaultValue(' 0')]
		]);
	}

	# Down
	public function down()
	{
		# Default Query
		return $this->dropTable();
	}
}