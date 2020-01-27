
<?php 

require_once('Database.php');
require_once('File.php');

class FileManager
{

   public function showAllFiles()
   {  
      $query = Database::getPdo()->prepare("SELECT * FROM files ORDER BY date DESC");

      $query->execute();

      $files = array();

      $allFiles = $query->fetchAll();

      $index = 0;

      foreach($allFiles as $v)
      {
            $file = new File;
            $file->setId($v['id']);
            $file->setName($v['name']);
            $file->setSize($v['size']);
            $file->setType($v['type']);
            $file->setDate($v['date']);
            $files[$index] = $file;
            $index++;
      }

      return $files;
   }

   public function insertFile()
   {
      if(isset($_FILES['file'])){
         $errors= array();
         $file_name = $_FILES['file']['name'];
         $file_size = $_FILES['file']['size'];
         $file_tmp  = $_FILES['file']['tmp_name'];
         $file_type = $_FILES['file']['type'];
         $file_ext  = strtolower(end(explode('.',$_FILES['file']['name'])));
         
         $extensions= array(
         'pdf',
         'zip',
         'txt',
         'png');
         
         if(in_array($file_ext,$extensions)=== false){
            $errors[]="Extension n'est pas acceptée";
         }
         
         if($file_size > 1115097152) {
            $errors[]='Votre fichier dépasse la taille maximale';
         }
         
         if(empty($errors)==true) {
            move_uploaded_file($file_tmp,"storage/".$file_name);
            echo "Votre fichier a été ajoutée avec succès" . getcwd();
         }else{
            print_r($errors);
         }
      }

      $query = Database::getPdo()->prepare("INSERT INTO files (name,size, type) VALUES(:name,:size,:type)");
       
      $query->execute(array(
         'name'     => $_FILES['file']['name'],
         'size'     => $_FILES['file']['size'],          
         'type'   => $_FILES['file']['type']            
         ));

   }

   public function deleteFile()
   {
       $query = Database::getPdo()->prepare("DELETE FROM files WHERE id = :id LIMIT 1");
       $query->execute([
           "id"    =>  $_REQUEST['id']
       ]);
   }

}
 

?>