<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $fullname
 * @property int|null $access_admin
 * @property int|null $access_attendant
 * @property string $username
 * @property string|null $password
 * @property string $gender
 * @property int|null $user_id
 * @property string|null $address
 * @property string|null $phone_res
 * @property string|null $address_work
 * @property string|null $phone_work
 * @property string|null $cellphone
 * @property string|null $cpf
 * @property \Cake\I18n\FrozenTime $birthdate
 * @property int|null $active
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User[] $users
 * @property \App\Model\Entity\Rental[] $rentals
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'fullname' => true,
        'access_admin' => true,
        'access_attendant' => true,
        'username' => true,
        'password' => true,
        'gender' => true,
        'user_id' => true,
        'address' => true,
        'phone_res' => true,
        'address_work' => true,
        'phone_work' => true,
        'cellphone' => true,
        'cpf' => true,
        'birthdate' => true,
        'active' => true,
        'created' => true,
        'modified' => true,
        'users' => true,
        'rentals' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
