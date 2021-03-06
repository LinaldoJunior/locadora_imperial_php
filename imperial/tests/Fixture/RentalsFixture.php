<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RentalsFixture
 *
 */
class RentalsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'start_date' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'end_date' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'return_date' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'price' => ['type' => 'decimal', 'length' => 15, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'pre_paid' => ['type' => 'tinyinteger', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'payment_method_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'finished' => ['type' => 'tinyinteger', 'length' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'movie_media_type_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'active' => ['type' => 'tinyinteger', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        'created' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_rentals_payment_methods1_idx' => ['type' => 'index', 'columns' => ['payment_method_id'], 'length' => []],
            'fk_rentals_users1_idx' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
            'fk_rentals_movie_media_types1_idx' => ['type' => 'index', 'columns' => ['movie_media_type_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_rentals_movie_media_types1' => ['type' => 'foreign', 'columns' => ['movie_media_type_id'], 'references' => ['movie_media_types', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_rentals_payment_methods1' => ['type' => 'foreign', 'columns' => ['payment_method_id'], 'references' => ['payment_methods', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_rentals_users1' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'start_date' => '2019-02-08 03:10:09',
                'end_date' => '2019-02-08 03:10:09',
                'return_date' => '2019-02-08 03:10:09',
                'price' => 1.5,
                'pre_paid' => 1,
                'payment_method_id' => 1,
                'user_id' => 1,
                'finished' => 1,
                'movie_media_type_id' => 1,
                'active' => 1,
                'created' => 1549595409,
                'modified' => 1549595409
            ],
        ];
        parent::init();
    }
}
