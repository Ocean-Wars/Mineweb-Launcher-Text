<?php


class LaunchertextController extends LaunchertextAppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    public function index() {
        // we just want to send json objects
        $this->autoRender = false;

        $this->loadModel('Launcherhelper.LauncherText');
        $datas = $this->LauncherImage->get();
        $result = array();
        foreach ($datas as $data) {
            array_push($result, $data['LauncherText']['image']);
        }

        $resultJS = json_encode($result);
        $this->response->type('json');
        $this->response->body($resultJS);
        return $this->response;
    }

    public function admin_index()
    {
        if ($this->isConnected and $this->User->isAdmin()) {
            $this->loadModel('Launchertext.LauncherText');
            if ($this->request->is('ajax')) {
                $this->autoRender = null;
                $image = $this->request->data['image'];
                $this->LauncherImage->add($image);
                $this->response->body(json_encode(array('statut' => true, 'msg' => $this->Lang->get('GLOBAL__SUCCESS'))));
            } else {
                $this->layout = 'admin';
                $datas = $this->LauncherText->get();
                $this->set(compact('datas'));
            }
        } else {
            $this->redirect('/');
        }
    }

    public function admin_delete($id) {
        if ($this->isConnected and $this->User->isAdmin()) {
            $this->autoRender = null;

            $this->loadModel('Launcherhelper.LauncherText');

            //J'utilise _delete() car delete() existe déjà avec cakephp
            $this->LauncherImage->_delete($id);

            //Redirection vers notre page
            $this->redirect('/admin/launcherhelper');
        } else {
            $this->redirect('/');
        }
    }
}