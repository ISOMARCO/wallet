<?php
class InternalMigrateCategory extends ZN\Database\Migration
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
			'Name' => [DB::longText(),DB::null()],
			'Type' => [DB::varchar(10), DB::null(), DB::defaultValue('NEGATIVE')],
			'Picture' => [DB::varchar(255), DB::null()],
			'Parent_Category' => [DB::varchar(30), DB::null()],
            'User' => [DB::varchar(30),DB::null()],
			'Created_Date' => [DB::dateTime(), DB::null()],
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