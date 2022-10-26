<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * ReadSpeakers webReader for Moodle block.
 *
 * @package    block_readspeaker_embhl
 * @copyright  2016 ReadSpeaker <info@readspeaker.com>
 * @author     Richard Risholm
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {

    $settings->add(new admin_setting_heading(
        'header_config',
        get_string('header_config', 'block_readspeaker_embhl'),
        get_string('header_config_description', 'block_readspeaker_embhl')
    ));

    /*$settings->add(new admin_setting_configtext(
        'readspeaker_embhl/title',
        get_string('blocktitle', 'block_readspeaker_embhl'),
        get_string('descblocktitle', 'block_readspeaker_embhl'),
        get_string('block_title', 'block_readspeaker_embhl'),
        PARAM_RAW_TRIMMED
    ));*/

    $settings->add(new admin_setting_configtext(
        'readspeaker_embhl/cid',
        get_string('customerid', 'block_readspeaker_embhl'),
        get_string('customerid_description', 'block_readspeaker_embhl'),
        0,
        PARAM_INT
    ));

    $settings->add(new admin_setting_configtext(
        'readspeaker_embhl/readid',
        get_string('readid', 'block_readspeaker_embhl'),
        get_string('readid_description', 'block_readspeaker_embhl'),
        'region-main',
        PARAM_RAW
    ));

    $settings->add(new admin_setting_configselect(
        'readspeaker_embhl/lang',
        get_string('lang', 'block_readspeaker_embhl'),
        get_string('lang_description', 'block_readspeaker_embhl'),
        'en_us',
        array(
            'ar_ar' => 'Arabic',
            'eu_es' => 'Basque',
            'ca_es' => 'Catalan',
            'zh_cn' => 'Chinese (Mandarin)',
            'zh_tw' => 'Chinese Taiwanese Mandarin',
            'hr_hr' => 'Croatian',
            'cs_cz' => 'Czech',
            'da_dk' => 'Danish',
            'nl_nl' => 'Dutch',
            'fy_nl' => 'Dutch (Frisian)',
            'nl_be' => 'Dutch (Flemish)',
            'en_us' => 'English (American)',
            'en_au' => 'English (Australian)',
            'en_in' => 'English (Indian)',
            'en_sc' => 'English (Scottish)',
            'en_za' => 'English (South African)',
            'en_uk' => 'English (UK)',
            'fo_fo' => 'Faroese',
            'fa_ir' => 'Farsi',
            'fi_fi' => 'Finnish',
            'fr_fr' => 'French',
            'fr_be' => 'French (Belgian)',
            'fr_ca' => 'French (Canadian)',
            'gl_es' => 'Galician',
            'he_il' => 'Hebrew',
            'de_de' => 'German',
            'el_gr' => 'Greek',
            'hi_in' => 'Hindi',
            'zh_hk' => 'Hong Kong Cantonese',
            'hu_hu' => 'Hungarian',
            'is_is' => 'Icelandic',
            'it_it' => 'Italian',
            'ja_jp' => 'Japanese',
            'ko_kr' => 'Korean',
            'es_es' => 'Spanish (Castilian)',
            'es_us' => 'Spanish (American)',
            'es_co' => 'Spanish (Columbian)',
            'es_mx' => 'Spanish (Mexican)',
            'no_nb' => 'Norwegian (Bokm&aring;l)',
            'no_nn' => 'Norwegian (Nynorska)',
            'pl_pl' => 'Polish',
            'pt_pt' => 'Portuguese',
            'pt_br' => 'Portuguese (Brazilian)',
            'ro_ro' => 'Romanian',
            'ru_ru' => 'Russian',
            'sv_se' => 'Swedish',
            'sv_fi' => 'Swedish (Finnish)',
            'th_th' => 'Thai',
            'tr_tr' => 'Turkish',
            'cy_cy' => 'Welsh'
        )
    ));

    $settings->add(new admin_setting_configselect(
        'readspeaker_embhl/region',
        get_string('region', 'block_readspeaker_embhl'),
        get_string('region_description', 'block_readspeaker_embhl'),
        'eu',
        array(
            'af' => 'Africa',
            'as' => 'Asia',
            'eas' => 'East Asia',
            'eu' => 'Europe',
            'me' => 'Middle East',
            'na' => 'North America',
            'sa' => 'South America',
            'oc' => 'Oceania'
        )
    ));

    $settings->add(new admin_setting_configtext(
        'readspeaker_embhl/docreaderenabled',
        get_string('docreader', 'block_readspeaker_embhl'),
        get_string('docreader_description', 'block_readspeaker_embhl'), '')
    );

    $settings->add(new admin_setting_configselect(
        'readspeaker_embhl/showincontent',
        get_string('showincontent', 'block_readspeaker_embhl'),
        get_string('showincontent_description', 'block_readspeaker_embhl'),
        '0',
        array(
                '0' => 'Show in block (default)',
                '1' => 'Show in content')
    ));

    $settings->add(new admin_setting_configtext(
        'readspeaker_embhl/customparams',
        get_string('customparams', 'block_readspeaker_embhl'),
        get_string('customparams_description', 'block_readspeaker_embhl'),
        '',
        PARAM_TEXT
    ));
}