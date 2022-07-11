<?php

require "model/CategoriaModel.php";
require "model/ProdutoModel.php";

class Categoria{

   function __construct(){
      $this->model = new CategoriaModel();
      $this->model = new ProdutoModel();
   }

   function index($id = null){
      $categorias = $this->model->buscarTodos();
      if(!$id){
         $produtos = $this->produto->buscarTodos();
      }else{
         $produto = $this->produto->buscarPorCategoria($id);
      }
      $produto = $this->produto->buscarTodos();
      include "view/template/cabecalho.php";
      include "view/template/menu.php";
      include "view/home/listagem.php";
      include "view/template/rodape.php";
   }

   function ver($id){
      $categorias = $this->categoria->buscarTodos();
      $produto = $this->produto->buscarPorId($id);
      include "view/template/cabecalho.php";
      include "view/template/menu.php";
      include "view/home/ver.php";
      include "view/template/rodape.php";
   }
}
   

   function search(){
      $categorias = $this->model->buscarTodos();
     
      $produto = $this->produto->buscarPorLikeNome($_POST['search']);($id);
      
      include "view/template/cabecalho.php";
      include "view/template/menu.php";
      include "view/home/listagem.php";
      include "view/template/rodape.php";
   }

