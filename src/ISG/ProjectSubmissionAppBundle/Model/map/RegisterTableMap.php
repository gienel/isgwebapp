<?php

namespace ISG\ProjectSubmissionAppBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'Register' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.src.ISG.ProjectSubmissionAppBundle.Model.map
 */
class RegisterTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.ISG.ProjectSubmissionAppBundle.Model.map.RegisterTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('Register');
        $this->setPhpName('Register');
        $this->setClassname('ISG\\ProjectSubmissionAppBundle\\Model\\Register');
        $this->setPackage('src.ISG.ProjectSubmissionAppBundle.Model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('NAME', 'Name', 'VARCHAR', true, 100, null);
        $this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // RegisterTableMap