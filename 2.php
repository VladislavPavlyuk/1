
<!doctype html>
<html>
    <head>
        <style>
          img {
                border: 1px solid #ddd;
                border-radius: 4px;
                padding: 5px;
                width: 150px;
              }          
        </style>
        <p> Задание 2.Считать все картинки из папки, в которой находится скрипт, и вывести их на страницу.</p>
    </head>
    <body>
      <?php
      
      function display_images($path) {
          $html = '';

          foreach (glob($path . "*.jpg") as $filename) {

              $html .= '<img class="pimg" src="' . $filename . '" alt="" />';            
              
          }
          return $html;
      }

          echo display_images("images/");

      ?>
    </body>
</html>



