<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Imgproduto Entity
 *
 * @property int $id
 * @property int $produto_id
 * @property string $photo
 * @property string $photo_dir
 *
 * @property \App\Model\Entity\Produto $produto
 */
class Imgproduto extends Entity
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
