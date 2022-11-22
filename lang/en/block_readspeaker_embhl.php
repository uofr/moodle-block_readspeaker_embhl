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

// General Strings.
$string['pluginname'] = 'ReadSpeaker webReader';
$string['readspeaker_embhl'] = 'ReadSpeaker webReader';
$string['readspeaker_embhl:addinstance'] = 'Add a new webReader block';
$string['readspeaker_embhl:myaddinstance'] = 'Add a new webReader block to the My Moodle page';
$string['readspeaker_embhl:edit'] = 'Edit setting for the webReader block';

// Admin Configuration Strings.
$string['header_config'] = 'Configuration Options';
$string['header_config_description'] = 'Below you will find the configuration options available for the ReadSpeaker webReader plugin.';

// Block title.
$string['block_title'] = 'Listen to this page using ReadSpeaker';
$string['block_settings_title'] = 'Configure ReadSpeaker webReader';

// CustomerID.
$string['customerid'] = 'Customer ID (required)';
$string['customerid_description'] = 'Your ReadSpeaker Customer ID (example "1234").';

// Language.
$string['lang'] = 'Reading language (required)';
$string['lang_description'] = 'Select the reading language for your ReadSpeaker installation (the selected language must be enabled in your ReadSpeaker account).';

// List of reading languages.
$string['arabic'] = 'Arabic';
$string['basque'] = 'Basque';
$string['catalan'] = 'Catalan';
$string['chinese_mandarin'] = 'Chinese (Mandarin)';
$string['chinese_taiwanese'] = 'Chinese Taiwanese Mandarin';
$string['croatian'] = 'Croatian';
$string['czech'] = 'Czech';
$string['danish'] = 'Danish';
$string['dutch'] = 'Dutch';
$string['dutch_frisian'] = 'Dutch (Frisian)';
$string['dutch_flemish'] = 'Dutch (Flemish)';
$string['english_american'] = 'English (American)';
$string['english_australian'] = 'English (Australian)';
$string['english_indian'] = 'English (Indian)';
$string['english_scottish'] = 'English (Scottish)';
$string['english_southafrican'] = 'English (South African)';
$string['english_brittish'] = 'English (UK)';
$string['faroese'] = 'Faroese';
$string['farsi'] = 'Farsi';
$string['finnish'] = 'Finnish';
$string['french'] = 'French';
$string['french_belgian'] = 'French (Belgian)';
$string['french_canadian'] = 'French (Canadian)';
$string['gelician'] = 'Galician';
$string['hebrew'] = 'Hebrew';
$string['german'] = 'German';
$string['greek'] = 'Greek';
$string['hindi'] = 'Hindi';
$string['hong_kong_cantonese'] = 'Hong Kong Cantonese';
$string['hungarian'] = 'Hungarian';
$string['icelandic'] = 'Icelandic';
$string['italian'] = 'Italian';
$string['japanese'] = 'Japanese';
$string['korean'] = 'Korean';
$string['spanish_castilian'] = 'Spanish (Castilian)';
$string['spanish_american'] = 'Spanish (American)';
$string['spanish_columbian'] = 'Spanish (Columbian)';
$string['spanish_mexican'] = 'Spanish (Mexican)';
$string['norwegian_bokmal'] = 'Norwegian (Bokm&aring;l)';
$string['norwegian_nynorsk'] = 'Norwegian (Nynorska)';
$string['polish'] = 'Polish';
$string['portuguese'] = 'Portuguese';
$string['portuguese_brazilian'] = 'Portuguese (Brazilian)';
$string['romanian'] = 'Romanian';
$string['russian'] = 'Russian';
$string['swedish'] = 'Swedish';
$string['swedish_finnish'] = 'Swedish (Finnish)';
$string['thai'] = 'Thai';
$string['turkish'] = 'Turkish';
$string['ukranian'] = 'Ukranian';
$string['welsh'] = 'Welsh';

// Language.
$string['region'] = 'Region';
$string['region_description'] = 'Select the region for your ReadSpeaker installation.';

// Readid.
$string['readid'] = 'Reading area ID (required)';
$string['readid_description'] = 'The ID of the block level element which is to be read (example "region-main").';

// Region names.
$string['africa'] = 'Africa';
$string['asia'] = 'Asia';
$string['east_asia'] = 'East Asia';
$string['europe'] = 'Europe';
$string['middle_east'] = 'Middle East';
$string['north_america'] = 'North America';
$string['south_america'] = 'South America';
$string['oceania'] = 'Oceania';

// DocReader.
$string['docreader'] = 'docReaderID';
$string['docreader_description'] = 'Enter your DocReaderID in order to enable DocReader in Moodle (DocReader must be enabled in your ReadSpeaker account). Leave blank to disable.';

// Player placement.
$string['showincontent'] = 'Listen button placement';
$string['showincontent_description'] = 'The Listen button is by default placed in a block in the sidebar. You can move the player to the top of the content instead.';
$string['showincontent_showinblock'] = 'Show in block';
$string['showincontent_showincontent'] = 'Show in content';

// Custom parameters.
$string['customparams'] = 'Advanced option: Custom parameters';
$string['customparams_description'] = 'Specify custom parameters to the ReadSpeaker Listen button (adds in addition to default).';

// For cache.
$string['cachedef_readspeaker_tokens'] = 'DocReader token cache';

// Listen button text.
$string['listentext'] = "Listen";

// Listen button descriptive title text.
$string['listen_titletext'] = "Listen to this page using ReadSpeaker";

// Privacy text.
$string['privacy:metadata'] = 'The ReadSpeaker block does not store any personal information and only displays the ReadSpeaker Listen button.';