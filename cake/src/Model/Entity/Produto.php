<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Produto Entity
 *
 * @property int $id
 * @property int $subcategoria_id
 * @property string $nome
 * @property string $estrutura
 * @property string $pintura
 * @property string $isolamento
 * @property string $unidade
 * @property string $refrigeracao
 * @property string $controledetemperatura
 * @property string $temperatura
 * @property string $porta
 * @property string $estrado
 * @property string $opicionais
 * @property string $motor
 * @property string $photo
 * @property string $photo_dir
 *
 * @property \App\Model\Entity\Subcategoria $subcategoria
 * @property \App\Model\Entity\Imgproduto[] $imgprodutos
 */
class Produto extends Entity
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
