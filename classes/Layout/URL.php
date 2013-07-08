<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Layout URL helper.
 *
 * @package    Layout
 * @category   Template
 * @author     Gian Carlo Val Ebao <gianebao@gmail.com>
 */
class Layout_URL extends Kohana_URL {
    
/**
 * Creates a URL link.
 *
 * @param string $route_name  Route name
 * @param mixed  $params      Values to be passed
 */
    public static function href($route_name, $params = null)
    {
        if (!is_array($params))
        {
            $params = array('id' => $params);
        }
        
        return URL::site(Route::get($route_name)->uri($params));
    }
}