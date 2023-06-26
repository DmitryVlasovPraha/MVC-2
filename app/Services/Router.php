<?php

namespace App\Services;

class Router
{

    /**
     * @var array
     */
  private static $list = [];

    /**
     * @param $uri
     * @param $page_name
     * @return void
     */
  public static function page($uri, $page_name)
  {
      self::$list[] = [
          "uri" => $uri,
          "page"  => $page_name
      ];
  }

    /**
     * @return void
     */
  public static function enable()
  {

      $query = $_GET['q'];
      foreach (self::$list as $route) {
          if ($route["uri"] === '/' . $query) {
          if ($route["post"] === true && $_SERVER["REQUEST_METHOD"] === "POST") {
              $action = new $route["class"];
              $method = $route["method"];
              if($route["formdata"] && $route["files"]) {
                  $action->$method($_POST, $_FILES);
              } elseif ($route["formdata"] && !$route["files"]) {
                  $action->$method($_POST);
              } else {
                  $action->$method();
              }
              die();
          } else {
                  require_once "views/pages/" . $route["page"] . ".php";
                  die();
              }
          }

      }
          self::error('404');

      }


    /**
     * @param $uri
     * @param $class
     * @param $method
     * @param $formdata
     * @param $files
     * @return void
     * Обработка POST запросов
     */
  public static function post($uri, $class, $method, $formdata = false, $files = false) {

      self::$list[] = [
          "uri" => $uri,
          "class" => $class,
          "method"  => $method,
          "post" => true,
          "formdata" => $formdata,
          "files" => $files
      ];
  }

    /**
     * @param $error
     * @return void
     * Переадресация на страницу ошибки
     */
  public static function error($error) {
      require_once "views/errors/" . $error . ".php";
  }

    /**
     * @param $page
     * @return void
     * Переадресация на переданную в качестве аргумента страницу
     */
   public static function redirect($page) {
        require_once "views/pages/" . $page . ".php" ;
        die();
    }



}