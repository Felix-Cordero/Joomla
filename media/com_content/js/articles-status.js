/**
 * @copyright  (C) 2022 Open Source Matters, Inc. <https://www.joomla.org>
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

(() => {

  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.article-status').forEach(element => {
      element.addEventListener('click', event => event.stopPropagation());
    });
  });
})();
