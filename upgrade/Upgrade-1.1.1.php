<?php
/**
 * 2016-2017 Michael Dekker and Robert Andersson
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@thirtybees.com so we can send you a copy immediately.
 *
 *  @author    Michael Dekker <michael@thirtybees.com>
 *  @author    Robert Andersson <robert@manillusion.no>
 *  @copyright 2016-2017 Michael Dekker
 *  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */

function upgrade_module_1_1_1($module)
{
    /** @var MDImageMagick $module */
    $module->removeOverride('ImageManager');

    return $module->installOverrides();
}
