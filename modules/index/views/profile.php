<?php
/**
 * @filesource modules/index/views/profile.php
 */

namespace Index\Profile;

use Kotchasan\Http\Request;
use Kotchasan\Language;
use Kotchasan\Template;

/**
 * module=editprofile&tab=profile
 */
class View extends \Gcms\View
{
    /**
     * tab สมาชิก Profile
     *
     * @param Request $request
     * @param object $user
     *
     * @return string
     */
    public static function render(Request $request, $user)
    {
        $player = '';
        foreach (\Index\Editprofile\Model::account($user->id) as $item) {
            if (isset(self::$cfg->agency[$item->agency])) {
                $player .= '<tr><td>'.self::$cfg->agency[$item->agency][0].'</td><td class=icon-copy title='.$item->bet_username.'>'.$item->bet_username.'</td><td class=icon-copy title='.$item->bet_password.'>'.$item->bet_password.'</td></tr>';
            }
        }
        // member/profile.html
        $template = Template::create('member', 'member', 'profile');
        $template->add(array(
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
            '/{PLAYER}/' => $player,
        ));

        return $template->render();
    }
}
