<?php
class InternalMigrateGoods extends ZN\Database\Migration
{
	# Class/Table Name
	const table = __CLASS__;

	# Up
	public function up()
	{
		# Default Query
		$this->createTable
		([
			'Id' => [DB::int(11),DB::primaryKey(), DB::autoIncrement(),DB::notNull()],
            'Uid' => [DB::varchar(30),DB::unique(),DB::notNull()],
			'Name' => [DB::longText(),DB::null()],
            'User' => [DB::varchar(30),DB::null()],
			'Active' => [DB::tinyInt(1),DB::defaultValue('1')]
		]);
        return DBForge::createFulltextIndex('NameIndex','Goods','Name');
	}

	# Down
	public function down()
	{
		# Default Query
		return $this->dropTable();
	}
}