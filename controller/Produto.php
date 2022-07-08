<?php

require 'model/ProdutoModel.php';
require 'model/CategoriaModel.php';
class Produto{

function __construct(){
    $this->model = new ProdutoModel();
    $this->categoria_model = new CategoriaModel();
 }

 function salvar() {

   if(isset($_POST['nome']) && !empty($_POST[''])){
      $nome_foto = $this->salvar_foto() ?? "semfoto.jpg";

      if(empty($_POST['idproduto'])){
         $this-model->
      }
   }
   }
 }
}
 

 function index(){
    $produtos = $this->model->buscarTodos();
    include "view/template/cabecalho.php";
    include "view/template/menu.php";
    include "view/produto/listagem.php";
    include "view/template/rodape.php";
 }

 function add(){
   $categorias = $this->categoria_model->buscarTodos();
    include "view/template/cabecalho.php";
    include "view/template/menu.php";
    include "view/produto/form.php";
    include "view/template/rodape.php";
 }

 function editar($id){
    $produto = $this->model->buscarPorId($id);
    include "view/template/cabecalho.php";
    include "view/template/menu.php";
    include "view/produto/form.php";
    include "view/template/rodape.php";
 }

 function excluir($id){
    $this->model->excluir($id);
    header('Location: ?c=produto');
 }

 function salvar(){
    if(isset($_POST['nome']) && !empty($_POST['nome'])){
       if(empty($_POST['idproduto'])){
         $nome, $descricao, $preco, $marca, $foto, $idcategoria
          $this->model->inserir($_POST['nome'], $_POST['descricao'], $_POST['preco'], $_POST['marca'], $foto, $_POST['categoria']);
       }else{
          $this->model->atualizar($_POST['idproduto'], $_POST['nome'], $_POST['descricao'], $_POST['preco'], $_POST['marca'], $foto, $_POST['categoria']);
       }
      
       
       header('Location: ?c=produto');
    }else{
       echo "Ocorreu um erro, pois os dados não foram enviados";
    }
 }
}
