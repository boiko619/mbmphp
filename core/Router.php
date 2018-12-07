

    <?php
/*
switch ($_SERVER['REQUEST_URI']) {
    case '/':
        # code...
        require_once CONTROLLERS.'homecontroller.php';
        break;
  
        case '/home':

        require_once CONTROLLERS.'homecontroller.php';
        break;
      
    
        case '/about':
   
        require_once CONTROLLERS.'aboutcontroller.php';
        break;
        
        case '/cont':
   
        require_once CONTROLLERS.'contcontroller.php';
        break;
        case '/vacancy':
   
        require_once CONTROLLERS.'vacancycontroller.php';
        break;
    
        case '/partner':
   
        require_once CONTROLLERS.'partnercontroller.php';
        break;
        
   
   
      
    default:

        # code...
       require_once VIEWS.'error/404.php';

}

*/
    function getURI()
    {
        if (isset($_SERVER['REQUEST_URI']) and !empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }


    function getPathAction($route)
    {
        $segments = explode('\\', $route);
        $controller = array_pop($segments);
        $controllerPath = '/';

        do {
            if(count($segments)===0){
              return array ($controller, $controllerPath);
              } else {
                  $segment = array_shift($segments);
                  $controllerPath = $controllerPath . $segment . '/';
              }
           } while (count($segments)>=0);
    }

    // получаем строку запроса

    $uri = getURI();

    $filename = CONFIG.'routers.php';

    if (file_exists($filename)) {
        $routes = include_once $filename;
    } else {
        echo "Файл $filename не существует";
    }

    // Проверить наличие такого запроса в routes

    foreach ($routes as $route => $path) {

        //Сравниваем route и $uri
        if ($route === $uri) {

            // Определить контроллер

            // $controllerName = $path;
            // Подключаем файл контроллера
            // $controllerFile = CONTROLLERS . $controllerName . EXT;

            //
            // if (file_exists($controllerFile)) {
            //     include_once $controllerFile;
            //     $result = true;
            // }

            list($controller, $controllerPath) = getPathAction($path);

            // print_r($controller);
            // echo "<br>";
            //
            // print_r($controllerPath);
            // echo "<br>";
            // $result = true;

            $controllerFile = CONTROLLERS .$controllerPath . $controller . ".php";

            if (file_exists($controllerFile)) {
                include_once $controllerFile;
                $result = true;
            }

            if ($result !== null) {
                break;
            }
        }
    }

    if ($result === null) {
            include_once VIEWS.'error/404.php';
    }

    ?>