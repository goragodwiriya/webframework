<?php
/**
 * @filesource modules/index/views/password.php
 */

namespace Index\Password;

use Kotchasan\Http\Request;
use Kotchasan\Template;

/**
 * module=editprofile&tab=password
 */
class View extends \Gcms\View
{
    /**
     * tab สมาชิก Password
     *
     * @param Request $request
     * @param object $user
     *
     * @return string
     */
    public static function render(Request $request, $user)
    {
        // member/password.html
        $template = Template::create('member', 'member', 'password');
        /*$template->add(array(
        '/{USERNAME}/' => $user->username,
        '/{TITLES}/' => self::toOption(Language::get('TITLES'), $user->title),
        '/{PHONE_COUNTRY}/' => self::toOption(Language::get('PHONE_COUNTRIES'), $user->phone_country),
        '/{NAME}/' => $user->name,
        '/{PHONE}/' => $user->phone,
        '/{LINE}/' => $user->line,
        '/{EMAIL}/' => $user->email,
        '/{BANKS}/' => self::toOption(array('' => '{LNG_please select}') + Language::get('BANKS'), $user->bank),
        '/{BANK_ACCOUNT}/' => $user->bank_account,
        '/{ADVISOR}/' => $user->advisor,
        '/{ID}/' => $user->id,
        ));*/

        return $template->render();
    }
}
