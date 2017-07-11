<?php
/**
 * @copyright 2017 Koen Martens <gmc@sonologic.nl>
 *
 * @author Koen Martens <gmc@sonologic.nl>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */
namespace OCA\News\Migration;

use OCP\Migration\IRepairStep;
use OCP\Migration\IOutput;

class MigrateStatusFlags implements IRepairStep {

    /** @var IDBConnection */
    private $db;

    /** @var IJobList */
    private $jobList;

    /** @var IConfig */
    private $config;

    /**
     * @param IDBConnection $db
     * @param IJobList $jobList
     * @param IConfig $config
     */
/*    public function __construct(IDBConnection $db,
                                IJobList $jobList,
                                IConfig $config) {
        $this->db = $db;
        $this->jobList = $jobList;
        $this->config = $config;
    }*/

    public function getName() {
        return "Migrating status flags from binary encoded int column to boolean columns";
    }

    public function run(IOutput $output) {
        $output->info($this->getName());
    }

}
