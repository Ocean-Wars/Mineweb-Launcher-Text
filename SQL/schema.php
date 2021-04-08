<?php 
class LaunchertextAppSchema extends CakeSchema {

    public $file = 'schema.php';

	public function before($event = []) {
		return true;
	}

	public function after($event = []) {
	}

	public $launchertext__launcher_texts = [
        'id' => [
            'type' => 'integer',
            'null' => false,
            'default' => null,
            'unsigned' => false,
            'key' => 'primary'],
        'version' => [
            'type' => 'string',
            'null' => false,
            'default' => null,
            'collate' => 'latin1_swedish_ci',
            'charset' => 'latin1'],
        'text' => [
            'type' => 'string',
            'null' => false,
            'default' => null,
            'collate' => 'latin1_swedish_ci',
            'charset' => 'latin1']
    ];
}
