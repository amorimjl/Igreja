<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VersesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VersesTable Test Case
 */
class VersesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VersesTable
     */
    public $Verses;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.verses'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Verses') ? [] : ['className' => VersesTable::class];
        $this->Verses = TableRegistry::getTableLocator()->get('Verses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Verses);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
