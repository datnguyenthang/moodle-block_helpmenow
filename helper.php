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

class helpmenow_helper extends helpmenow_db_object {
    /**
     * Table of the object.
     * @var string $table
     */
    private $table = 'block_helpmenow_helper';

    /**
     * Array of required db fields.
     * @var array $required_fields
     */
    private $required_fields = array(
        'id',
        'timecreated',
        'timemodified',
        'modifiedby',
        'queueid',
        'helper_userid',
    );

    /**
     * Array of optional db fields.
     * @var array $optional_fields
     */
    private $optional_fields = array();

    /**
     * The queue the meeting belongs to.
     * @var int $queueid
     */
    public $queueid;

    /**
     * The userid of the helper.
     * @var int $helper_userid
     */
    public $helper_userid;
}

?>
