<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Representante Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $atuacao
 * @property int $estado_id
 *
 * @property \App\Model\Entity\Estado $estado
 * @property \App\Model\Entity\Celular[] $celulars
 * @property \App\Model\Entity\Email[] $emails
 */
class Representante extends Entity
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
        '*' => true,
        'id' => false
    ];
}
