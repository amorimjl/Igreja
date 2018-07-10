<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Verse Entity
 *
 * @property int $id
 * @property string $verse
 * @property string $text
 * @property \Cake\I18n\FrozenDate $date
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Verse extends Entity
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
        'verse' => true,
        'text' => true,
        'date' => true,
        'created' => true,
        'modified' => true
    ];
}
