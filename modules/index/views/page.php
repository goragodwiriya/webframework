<?php
/**
 * @filesource modules/index/views/page.php
 */

namespace Index\Page;

use Kotchasan\Http\Request;
use Kotchasan\Template;

/**
 * module=home
 */
class View extends \Gcms\View
{
    /**
     * หน้าเพจ HTML
     *
     * @param Request            $request
     *
     * @return string
     */
    public static function render(Request $request, $alias)
    {
        // page/$alias.html
        $template = Template::create('page', 'page', $alias);

        return $template->isEmpty() ? false : $template->render();
    }
}
