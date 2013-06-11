<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Layout templating collection.
 *
 * @package    Layout
 * @category   Template
 * @author     Gian Carlo Val Ebao <gianebao@gmail.com>
 */
class Layout_Layout_Parser {
    
    /**
     * Replaces wildcards in a file path.
     * 
     *     $layout = Layout_Layout_Parser::evaluate('new/file/path');
     * 
     * @param   string  path  view filename
     * @return  string
     */
    public static function evaluate($path)
    {
        return self::check_agent($path);
    }
    
    /**
     * Replaces :device with the current device type (mobile/desktop).
     *
     * @param   string  path  view filename
     * @return  string
     */
    static protected function check_agent($path)
    {
        $agent = Request::user_agent('mobile');
        return str_replace(':device', (false === !empty($agent) ? 'desktop': 'mobile'), $path);
    }
}