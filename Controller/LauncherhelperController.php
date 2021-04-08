<?php


class LauncherhelperController extends LauncherhelperAppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    public function index() {
        // we just want to send json objects
        $this->autoRender = false;

        $this->loadModel('Launcherhelper.LauncherImage');
        $datas = $this->LauncherImage->get();
        $result = array();
        foreach ($datas as $data) {
            array_push($result, $data['LauncherImage']['image']);
        }

        $resultJS = json_encode($result);
        $this->response->type('json');
        $this->response->body($resultJS);
        return $this->response;
    }

    public function admin_index()
    {
        if ($this->isConnected and $this->User->isAdmin()) {
            $this->loadModel('Launcherhelper.LauncherImage');
            if ($this->request->is('ajax')) {
                $this->autoRender = null;
                $image = $this->request->data['image'];
                $this->LauncherImage->add($image);
                $this->response->body(json_encode(array('statut' => true, 'msg' => $this->Lang->get('GLOBAL__SUCCESS'))));
            } else {
                $this->layout = 'admin';
                $datas = $this->LauncherImage->get();
                $this->set(compact('datas'));
            }
        } else {
            $this->redirect('/');
        }
    }

    public function admin_delete($id) {
        if ($this->isConnected and $this->User->isAdmin()) {
            $this->autoRender = null;

            $this->loadModel('Launcherhelper.LauncherImage');

            //J'utilise _delete() car delete() existe déjà avec cakephp
            $this->LauncherImage->_delete($id);

            //Redirection vers notre page
            $this->redirect('/admin/launcherhelper');
        } else {
            $this->redirect('/');
        }
    }
}