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
 * Help me now helper class.
 *
 * @package     block_helpmenow
 * @copyright   2012 VLACS
 * @author      David Zaharee <dzaharee@vlacs.org>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(dirname(__FILE__) . '/db_object.php');

# TODO: do we want to track logged in via unixtime or boolean?

class helpmenow_helper extends helpmenow_db_object {
    const table = 'helper';

    /**
     * Array of required db fields.
     * @var array $required_fields
     */
    protected $required_fields = array(
        'id',
        'timecreated',
        'timemodified',
        'modifiedby',
        'plugin',
        'queueid',
        'userid',
        'isloggedin',
        'last_action',
        'last_refresh',
    );

    /**
     * The queue the helper belongs to.
     * @var int $queueid
     */
    public $queueid;

    /**
     * The userid of the helper.
     * @var int $userid
     */
    public $userid;

    /**
     * Integer boolean, login status of helper
     * @var int $isloggedin
     */
    public $isloggedin;

    /**
     * Timestamp of last action performed by the user.
     * @var int $last_action
     */
    public $last_action;

    /**
     * Timestamp of last refresh of the the helper interface by user.
     * @var int $last_refresh
     */
    public $last_refresh;
}

?>
