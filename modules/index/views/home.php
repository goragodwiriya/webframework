<?php
/**
 * @filesource modules/index/views/editprofile.php
 *
 * @copyright 2016 Goragod.com
 * @license http://www.kotchasan.com/license/
 *
 * @see http://www.kotchasan.com/
 */

namespace Index\Home;

use Kotchasan\Http\Request;
use Kotchasan\Template;

/**
 * module=home
 *
 * @author Goragod Wiriya <admin@goragod.com>
 *
 * @since 1.0
 */
class View extends \Gcms\View
{
    /**
     * หน้า Home
     *
     * @param Request $request
     *
     * @return string
     */
    public static function render(Request $request)
    {
        // home.html
        $template = Template::create('', '', 'home');
        $template->add(array(
            //'/{LIST0}/' => self::items(0),
            //'/{LIST1}/' => self::items(1),
            //'/{SHOW}/' => empty(self::$cfg->show_login_image) ? 0 : 1,
            //'/{IMAGE}/' => is_file(ROOT_PATH.DATA_FOLDER.'images/login_image.png') ? WEB_URL.DATA_FOLDER.'images/login_image.png' : '',
        ));
        return $template->render();
    }
}
