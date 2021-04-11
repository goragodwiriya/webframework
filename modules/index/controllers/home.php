<?php
/**
 * @filesource modules/index/controllers/home.php
 *
 * @copyright 2016 Goragod.com
 * @license http://www.kotchasan.com/license/
 *
 * @see http://www.kotchasan.com/
 */

namespace Index\Home;

use Kotchasan\Http\Request;
use Kotchasan\Http\Uri;

/**
 * module=home
 *
 * @author Goragod Wiriya <admin@goragod.com>
 *
 * @since 1.0
 */
class Controller extends \Gcms\Controller
{
    /**
     * Home
     *
     * @param Request $request
     *
     * @return string
     */
    public function render(Request $request)
    {
        // title, keywords, description
        $this->canonical = Uri::createFromUri(WEB_URL);
        $this->menu = 'home';
        // View
        return createClass('Index\Home\View')->render($request);
    }
}
