<?php

if (isset($_POST['publish'])) {
   storage_db();
}
    
   //conectando ao banco de dados
   function connect_db(){

      //Dados do banco de dados
      $user = "b79a82ddcdb5cc";
      $password = "61b562df";
      $db = "heroku_ad279c73e8320b2";
      $hostname = "us-cdbr-east-05.cleardb.net";

     //Conectando ao banco de dados
     $conn = mysqli_connect($hostname, $user, $password, $db);
     if (mysqli_connect($hostname, $user, $password, $db)) {
        echo "<script>console.log('database successfully connected!')</script>";
     } else {
        echo "database connection error!";
     }
     return $conn;
   }
   
   function storage_db(){

      $contact = $_POST['prefix'] . $_POST['contact'];
      $message = $_POST['message'];
      $task = $_POST['task'];
      $reward = $_POST['reward'];

      $query = "INSERT INTO heroku_ad279c73e8320b2.`feed24horas` (`contact`, `message`, `task`, `reward`) VALUES (
         '$contact', '$message', '$task', '$reward'
         ) ";

      if (mysqli_query(connect_db(), $query)) {
         //echo "Publicação armazenada com sucesso <br>";
      } else {
      echo "Error: " . $query . "\n" . mysqli_error(connect_db());
      }

   }
   
   function consult_db(){

      $query = "SELECT `task`, `reward`, `contact`,`message` FROM heroku_ad279c73e8320b2.`feed24horas`";
      $dados = mysqli_query(connect_db(), $query);
      
      while ($line = mysqli_fetch_assoc($dados)) {

         
         echo "<div id='container-item'>
         <div class='ctn-itens'>
             <div>
                 Tarefa: 
                 <span class='text-pub'>$line[task]</span>
             </div>
             <div>
                 Recompensa:
                 <span class='text-pub'>$line[reward]</span>
             </div>
         </div>
         <div class='ctn-btn'>
             <a href='https://wa.me/$line[contact]?text=Eu%20tenho%20interesse%20na%20sua%20tarefa!'>
                 <span>Tenho interesse</span>
                 <span class='material-icons-outlined'>arrow_forward</span>
             </a>
         </div>
         </div>";
      
      }
      
   }
