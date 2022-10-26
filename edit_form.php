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
class block_readspeaker_embhl_edit_form extends block_edit_form {

    protected function specific_definition($mform) {

        // Section header title according to language file.
        $mform->addElement('header', 'configheader', get_string('block_settings_title', 'block'));

        // Set a custom language
        $language_option = array(
                'ar_ar' => 'Arabic',
                'eu_es' => 'Basque',
                'ca_es' => 'Catalan',
                'zh_cn' => 'Chinese (Mandarin)',
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
                'fi_fi' => 'Finnish',
                'fr_fr' => 'French',
                'fr_be' => 'French (Belgian)',
                'fr_ca' => 'French (Canadian)',
                'gl_es' => 'Galician',
                'de_de' => 'German',
                'el_gr' => 'Greek',
                'he_il' => 'Hebrew',
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
        );
        $language_select = $mform->addElement('select', 'config_lang', get_string('lang', 'block_readspeaker_embhl'), $language_option);
        $language_select->setSelected(get_config('readspeaker_embhl', 'lang'));

        // For custom parameters
        $mform->addElement('text', 'config_customparams', get_string('customparams', 'block_readspeaker_embhl'));
        $mform->setDefault('config_customparams', get_config('readspeaker_embhl', 'customparams'));
        $mform->setType('config_customparams', PARAM_TEXT);
    }

    function validation($data, $files) {
        $errors = parent::validation($data, $files);
        if (isset($data['config_customparams'])) {
            // Check with regular expression that it only contains valid characters
            if (preg_match('/[^a-zA-Z0-9&=]/', $data['config_customparams'])) {
                $errors['config_customparams'] = 'Invalid character included in custom parameter.';
            }
            // Check PARAM_URL with temporary test URL
            $temp_url = 'https://app-eu.readspeaker.com/cgi-bin/rsent?customerid=TEST&lang=TEST&readid=TEST&url=TEST' . $data['config_customparams'];
            if (clean_param($temp_url, PARAM_URL) === '') {
                $errors['config_customparams'] = 'Invalid custom parameter provided, did not pass PARAM_URL check.';
            }
        }
        return $errors;
    }
}