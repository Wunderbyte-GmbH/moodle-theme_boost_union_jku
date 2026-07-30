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
 * Theme Boost Union Child - Core renderer
 *
 * @package    theme_boost_union_jku
 * @copyright  2026 Wunderbyte GmbH <info@wunderbyte.at>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace theme_boost_union_jku\output;

/**
 * Extending the core_renderer of Boost Union.
 *
 * @package    theme_boost_union_jku
 * @copyright  2026 Wunderbyte GmbH <info@wunderbyte.at>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class core_renderer extends \theme_boost_union\output\core_renderer {

    /**
     * Renders the navbar language picker.
     *
     * Core only exports the standalone language menu for logged-out users and
     * moves it into the user menu submenu once logged in (see
     * \core\navigation\output\primary::export_for_template). The JKU design
     * (Figma node 11229:102372) shows the language picker as the last navbar
     * element for all users, so this method renders it regardless of the
     * login state. Used by the theme's navbar.mustache override.
     *
     * @return string The rendered language menu, or an empty string if the
     *                language menu should not be shown (e.g. only one
     *                language installed or a forced course language).
     */
    public function jku_language_menu(): string {
        $languagemenu = new \core\output\language_menu($this->page);
        $data = $languagemenu->export_for_template($this);
        if (empty($data)) {
            return '';
        }
        return $this->render_from_template('theme_boost/language_menu', $data);
    }
}
