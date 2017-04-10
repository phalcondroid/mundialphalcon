<?php

class ArbitroController extends ControllerBase
{
    public function indexAction()
    {
        $arbitros = Arbitro::find();
        $this->view->arbitros =  $arbitros;
    }

    public function newAction()
    {
        $this->view->paises = Pais::find();
        if ($this->request->isPost()) {

            $arbitro = new Arbitro();
            $arbitro->id_pais = $this->request->getPost("pais");
            $arbitro->nombre  = $this->request->getPost("name");

            if ($arbitro->save()) {
                $this->flash->success("Insertado correctamente");
            } else {
                foreach ($arbitro->getMessages() as $message) {
                    $this->flash->error($message);
                }
            }
        }
    }

    public function editAction($id)
    {
        $arbitro = Arbitro::findFirstByIdArbitro((int) $id);
        $this->view->arbitro = $arbitro;
        $this->view->paises = Pais::find();

        if ($this->request->isPost()) {

            $arbitro->id_pais = $this->request->getPost("pais");
            $arbitro->nombre  = $this->request->getPost("name");

            if ($arbitro->save()) {
                $this->flash->success("Actualización ok");
                $this->response->redirect("arbitro/index");
            } else {
                foreach ($arbitro->getMessages() as $message) {
                    $this->flash->error($message);
                }
            }
        }
    }

    public function deleteAction($id)
    {
        $arbitro = Arbitro::findFirstByIdArbitro((int) $id);
        $this->view->arbitro = $arbitro;

        if ($this->request->isPost()) {
            if ($arbitro->delete()) {
                $this->flash->success("Eliminación ok");
                $this->response->redirect("arbitro/index");
            } else {
                foreach ($arbitro->getMessages() as $message) {
                    $this->flash->error($message);
                }
            }
        }
    }
}
