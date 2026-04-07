<?php
/**
 * get base path
 * @param string $path
 * @return string
 */

function basePath($path = ''):string{
    return __DIR__ .'/'. $path;
}


/**
 * load a view
 * @param string $name
 * @return void
 */

function loadViews($name):void{

  $viewPath = basePath("views/{$name}.views.php");
 

   if(!file_exists($viewPath)){
     echo "views {$name} not found!";
   }

   require $viewPath;

   
}


/**
 * load a partials
 * @param string $name
 * @return void
 */

function loadPartials($name):void{
    $partialPath =  basePath("views/partials/{$name}.php");

    if(!file_exists($partialPath)){
       echo "partial {$name} not found";
    }

     require $partialPath;
}

/**
 * inspect a value(s)
 * @param mixed $value
 * @return void
 */


function inspect($value){
    echo '<prev>';
    echo var_dump($value);
    echo '</prev>';
}



/**
 * inspectAndDie a value(s)
 * @param mixed $value
 * @return void
 */


function inspectAndDie($value){
    echo '<prev>';
    echo die(var_dump($value));
    echo '</prev>';
}