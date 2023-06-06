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
            'Uid' => [DB::varchar(30),DB::unique(),DB::notNull()]
		]);
		#DBForge::createIndex("searchByUser","Category","User");
        #return DBForge::createFulltextIndex('NameIndex','Category','Name');
	}

	# Down
	public function down()
	{
		# Default Query
		return $this->dropTable();
	}
}