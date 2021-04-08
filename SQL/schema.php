<?php 
class LauncherhelperAppSchema extends CakeSchema {

    public $file = 'schema.php';

	public function before($event = []) {
		return true;
	}

	public function after($event = []) {
	}

	public $launcherhelper__launcher_images = [
        'id' => [
            'type' => 'integer',
            'null' => false,
            'default' => null,
            'unsigned' => false,
            'key' => 'primary'],
        'image' => [
            'type' => 'string',
            'null' => false,
            'default' => null,
            'collate' => 'latin1_swedish_ci',
            'charset' => 'latin1']
    ];
}
