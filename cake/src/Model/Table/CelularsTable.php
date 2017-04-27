<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Celulars Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Representantes
 *
 * @method \App\Model\Entity\Celular get($primaryKey, $options = [])
 * @method \App\Model\Entity\Celular newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Celular[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Celular|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Celular patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Celular[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Celular findOrCreate($search, callable $callback = null, $options = [])
 */
class CelularsTable extends Table
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

        $this->table('celulars');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsToMany('Representantes', [
            'foreignKey' => 'celular_id',
            'targetForeignKey' => 'representante_id',
            'joinTable' => 'celulars_representantes'
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
            ->allowEmpty('numero');

        return $validator;
    }
}
