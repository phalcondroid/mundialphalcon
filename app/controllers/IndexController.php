<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $partidos = Partido::findByIdEstado(1);

        $resultadoFinal = array();
        foreach ($partidos as $item) {
            $arbitro = Arbitro::findFirstByIdArbitro($item->id_arbitro);
            $equipo1 = Equipo::findFirstByIdEquipo($item->id_equipo1);
            $equipo2 = Equipo::findFirstByIdEquipo($item->id_equipo2);

            $resultadoFinal[] = array(
                "e1" => $equipo1->nombre,
                "e2" => $equipo2->nombre,
                "arbitro" => $arbitro->nombre
            );
        }
        $this->view->varPartidos = $resultadoFinal;
    }
}
