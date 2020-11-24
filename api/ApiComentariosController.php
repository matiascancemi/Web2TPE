<?php
require_once './Models/ComentariosModel.php';
require_once "./Models/TransaccionesModel.php";
require_once "./Models/BilleterasModel.php";
require_once 'ApiController.php';

class ApiComentariosController extends ApiController {

  
    function __construct() {
        parent::__construct();
        $this->model = new ComentariosModel();
        $this->view = new APIView();
    }

    public function GetComentarios($params = null) {
        $id_tns = $params[':ID'];
        $comentarios = $this->model->GetComentarios($id_tns);
        $this->view->response($comentarios, 200);
    }

    public function GetComentario($params = null) {
        $id = $params[':ID'];
        $comentario = $this->model->GetComentario($id);

        if (!empty($comentario)) // verifica si El comentario existe
            $this->view->response($comentario, 200);
        else
            $this->view->response("El comentario con el id=$id no existe", 404);
    }
    
    public function EliminarComentario($params = null) {
        $id = $params[':ID'];
        $result = $this->model->EliminarComentario($id);

        if($result == 0)
            $this->view->response("El comentario con el id=$id fue eliminada", 200);
        else
            $this->view->response("El comentario con el id=$id no existe", 404);
    }

    public function AgregarComentario($params = null){
        $body = $this->getData();

        $idcomentario = $this->model->AgregarComentario($body->id_tns,$body->id_usuario, $body->comentario, $body->valoracion);

        if (empty($idcomentario)) //
            $this->view->response( "Comentario agregado correcamente", 202);
        else
            $this->view->response("El comentario no se pudo insertar", 404);
    }

    public function EditarComentario($params = null){
        $id = $params[':ID'];
        $body = $this->getData();

        $comentario = $this->model->Getcomentario($id);
        if (empty($comentario)) {
            $this->view->response("El comentario con el id=$id no existe", 404);
        }else {
            $result = $this->model->EditarComentario($id,$body->title,$body->description,$body->completed,$body->priority);
            if($result > 0)
                $this->view->response( $this->model->Getcomentario($id), 200);
            else
                $this->view->response("El comentario con el id=$id no fue actualizada", 204);
        }
    }
}