<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Imgprodutos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Produtos
 *
 * @method \App\Model\Entity\Imgproduto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Imgproduto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Imgproduto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Imgproduto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Imgproduto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Imgproduto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Imgproduto findOrCreate($search, callable $callback = null, $options = [])
 */
class ImgprodutosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('imgprodutos');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Proffer.Proffer', [
            'photo' => [    // The name of your upload field
                'root' => WWW_ROOT . 'files', // Customise the root upload folder here, or omit to use the default
                'dir' => 'photo_dir',   // The name of the field to store the folder
                'thumbnailSizes' => [ // Declare your thumbnails
                    'principal' => [   // Define the prefix of your thumbnail
                        'w' => 1000, // Width
                        'h' => 1000, // Height
                        'fit' => true
                    ],
                    'square' => [   // Define the prefix of your thumbnail
                        'w' => 200, // Width
                        'h' => 200, // Height
                        'fit' => true
                    ],
                ],
                'thumbnailMethod' => 'gd'   // Options are Imagick or Gd
            ]
        ]);

        $this->belongsTo('Produtos', [
            'foreignKey' => 'produto_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('photo');

        $validator
            ->allowEmpty('photo_dir');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['produto_id'], 'Produtos'));

        return $rules;
    }
}
