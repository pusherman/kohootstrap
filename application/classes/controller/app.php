<?php defined('SYSPATH') or die('No direct script access.');
  
class Controller_App extends Controller_Template 
{
  public $template = 'layout/default';
  
  /**
   * The before() method is called before your controller action.
   * In our template controller we override this method so that we can
   * set up default values. These variables are then available to our
   * controllers if they need to be modified.
   */
  public function before()
  {
    parent::before();
  
    if ($this->auto_render)
    {
      // Initialize empty values
      $this->template->title   = '';
      $this->template->content = '';
  
      $this->template->styles = array();
      $this->template->scripts = array();
    }
  }

  public function after()
  {
    if ($this->auto_render)
    {
      $styles = array(
        'public/css/style.css' => 'all',
      );

      $scripts = array(
        'public/js/plugins.js',
        'public/js/script.js',
      );

      if (empty($this->template->menu_item))
      {
        $this->template->menu_item = Request::$current->controller();
      }      

      $this->template->styles = array_merge( $this->template->styles, $styles );
      $this->template->scripts = array_merge( $scripts, $this->template->scripts );
    }
    parent::after();
  }
}

  
?>