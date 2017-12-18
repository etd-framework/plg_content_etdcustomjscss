<?php
/**
 * @package      plg_content_etdcustomjscss
 *
 * @version      1.0.0
 * @copyright    Copyright (C) 2015-2018 ETD Solutions. Tous droits réservés.
 * @license      Apache Version 2 (https://raw.githubusercontent.com/etd-framework/plg_content_etdcustomjscss/master/LICENSE)
 * @author       ETD Solutions https://etd-solutions.com
 **/

defined('_JEXEC') or die;

class PlgContentEtdCustomJSCSS extends JPlugin {

    public function onContentPrepareForm(JForm $form, $data) {

        if ($form->getName() == 'com_content.article') {

            $form->loadFile(realpath(dirname(__FILE__) . '/fields.xml'), false);

        }

    }

}
