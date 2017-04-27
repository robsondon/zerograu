<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Produtos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Subcategorias
 * @property \Cake\ORM\Association\HasMany $Imgprodutos
 *
 * @method \App\Model\Entity\Produto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Produto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Produto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Produto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Produto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Produto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Produto findOrCreate($search, callable $callback = null, $options = [])
 */
class ProdutosTable extends Table
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

        $this->table('produtos');
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
                    'miniatura' => [   // Define the prefix of your thumbnail
                        'w' => 110, // Width
                        'h' => 110, // Height
                        'fit' => true
                    ],
                    'thumb' => [   // Define the prefix of your thumbnail
                        'w' => 200, // Width
                        'h' => 200, // Height
                        'fit' => true
                    ],
                ],
                'thumbnailMethod' => 'gd'   // Options are Imagick or Gd
            ]
        ]);
        $this->belongsTo('Subcategorias', [
            'foreignKey' => 'subcategoria_id'
        ]);
        $this->hasMany('Imgprodutos', [
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
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->allowEmpty('estrutura');

        $validator
            ->allowEmpty('pintura');

        $validator
            ->allowEmpty('isolamento');

        $validator
            ->allowEmpty('unidade');

        $validator
            ->allowEmpty('refrigeracao');

        $validator
            ->allowEmpty('controledetemperatura');

        $validator
            ->allowEmpty('temperatura');

        $validator
            ->allowEmpty('porta');

        $validator
            ->allowEmpty('estrado');

        $validator
            ->allowEmpty('opicionais');

        $validator
            ->allowEmpty('motor');

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
        $rules->add($rules->existsIn(['subcategoria_id'], 'Subcategorias'));

        return $rules;
    }
}
