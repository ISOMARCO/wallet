<?php
class InternalMigrateAccount extends ZN\Database\Migration
{
	# Class/Table Name
	const table = __CLASS__;

	# Up
	public function up()
	{
		# Default Query
		DBForge::createIndex('UserAccountIndex','Account','User');
		return $this->createTable
		([
			'Id' => [DB::int(11),DB::primaryKey(), DB::autoIncrement(),DB::notNull()],
            'Uid' => [DB::varchar(30),DB::unique(),DB::notNull()],
			'Name' => [DB::varchar(20),DB::null()],
			'Bank_Code' => [DB::varchar(20),DB::null()],
			'Type' => [DB::varchar(50),DB::null(),DB::defaultValue('Debit')],
			'Credit_Amount' => [DB::double(),DB::null(),DB::defaultValue('500')],
			'Currency' => [DB::varchar(5),DB::null(),DB::defaultValue('AZN')],
			'Balance' => [DB::double(),DB::null(),DB::defaultValue(' 0')],
			'About' => [DB::varchar(250),DB::null()],
			'User' => [DB::varchar(30),DB::null()],
            'Active' => [DB::tinyInt(),DB::null(),DB::defaultValue('1')]
		]);
	}

	# Down
	public function down()
	{
		# Default Query
		return $this->dropTable();
	}
}