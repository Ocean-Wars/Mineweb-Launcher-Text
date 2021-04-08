<?php
class LauncherImage extends LauncherhelperAppModel
{
    public function get() {
        return $this->find('all');
    }

    public function _delete($id) {
        return $this->delete($id);
    }

    public function add($image) {
        $this->create();
        $this->set(['image' => $image]);
        return $this->save();
    }
}