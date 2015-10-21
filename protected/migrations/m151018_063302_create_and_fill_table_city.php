<?php

class m151018_063302_create_and_fill_table_city extends CDbMigration
{
	public function up()
	{
		/**
		 * @var CDbConnection $db
		 */
		$db = Yii::app()->db;
		$command = $db->createCommand('CREATE TABLE IF NOT EXISTS `tbl_city` (
  `code` varchar(10) NOT NULL,
  `name` varchar(256) NOT NULL,
  `lat` float NOT NULL,
  `long` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;');
		$command->execute();

		$command = $db->createCommand("INSERT INTO `tbl_city` (`code`, `name`, `lat`, `long`) VALUES
('nsk', 'Novosibirsk', 55.1, 82.55),
('krsk', 'Krasnoyarsk', 56.01, 93.04),
('brnl', 'Barnaul', 53.2, 83.46),
('tsk', 'Tomsk', 56.29, 84.57),
('nzsk', 'Novokuznetsk', 53.44, 87.05);");
		$command->execute();

		return true;
	}

	public function down()
	{
		/**
		 * @var CDbConnection $db
		 */
		$db = Yii::app()->db;
		$command = $db->createCommand('DROP TABLE `tbl_city`');
		$command->execute();
		//echo "m151018_063302_create_and_fill_table_city does not support migration down.\n";
		//return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}