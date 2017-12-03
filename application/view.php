<?php

class View {
   public function load( $folder, $file_name, $data = null ){
      if( is_array($data) ) {
         extract($data);
      }
       $u = new Users();

      include 'views/'.$folder.'/'. $file_name . '.php';
   }
}

