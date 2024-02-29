<?php

namespace Modules\Application\Login\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{


  /**
   * The function `index()` is a public function that returns a string. The string is the result of the function `renderView()` which takes two parameters: `'starter'` and `$data`
   *
   * @return string The rendered view.
   */
  public function index(): string
  {
    $data['title'] = 'Login Page';
    return renderView('login', $data);
  }

  /**
   * It loads the view file starter.blade.php from the views modules.
   * Rendering the view using the blade template engine.
   *
   * @return string $string view is being returned.
   */
  public function blade(): string
  {
    $data['title'] = 'Login Page';
    return renderBlade('login', $data);
  }
}
