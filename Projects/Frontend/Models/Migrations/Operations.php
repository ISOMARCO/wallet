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
            'Document_Number' => [DB::bigInt(20),DB::unique(),DB::null()],
            'Type' => [DB::varchar(15), DB::null(), DB::defaultValue('POSITIVE')],
            'Description' => [DB::longText(),DB::null()],
            'Category_Uid' => [DB::varchar(30),DB::null()],
			'Amount' => [DB::double(),DB::null(), DB::defaultValue(' 0')],
            'Note' => [DB::text(1000), DB::null()],
            'User' => [DB::varchar(30), DB::null()]
		]);
        //return DBForge::createFulltextIndex('DescriptionIndex','Operations','Description');
	}

	# Down
	public function down()
	{
		# Default Query
		return $this->dropTable();
	}
}