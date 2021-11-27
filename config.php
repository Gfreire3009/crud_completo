// projeto em desenvolvimento
// desenvolvido com base em cursos...
// conexão com o bd
<?php
   //Conexão padrão 

      $dbHost = 'Localhost';
      $dbUsername = 'root';
      $dbPassword = '';
      $dbName = 'crud_trab';
      
      $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
  

 if($conexao->connect_errno)
  {
      echo "Erro";
    }
    else
   {
    echo "Conexão efetuada com sucesso";
    }

?>