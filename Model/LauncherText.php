<?php
class LauncherText extends LaunchertextAppModel
{
    public function get() {
        return $this->find('all');
    }

    /**
     * This method allow us to change the version and text for the patch note
     * @param $version String the new version
     * @param $text String the new text
     */
    public function change($version, $text)
    {
        $data = $this->get();
        if (!empty($data)) {
            $this->delete(1);
        }
        $this->create();
        $this->set(['version' => $version, 'text' => $text]);
        return $this->save();
    }

    public function add($image) {
        $this->create();
        $this->set(['image' => $image]);
        return $this->save();
    }
}