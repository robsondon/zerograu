<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Representantes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Estados
 * @property \Cake\ORM\Association\BelongsToMany $Celulars
 * @property \Cake\ORM\Association\BelongsToMany $Emails
 *
 * @method \App\Model\Entity\Representante get($primaryKey, $options = [])
 * @method \App\Model\Entity\Representante newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Representante[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Representante|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Representante patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Representante[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Representante findOrCreate($search, callable $callback = null, $options = [])
 */
class RepresentantesTable extends Table
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

        $this->table('representantes');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Estados', [
            'foreignKey' => 'estado_id'
        ]);
        $this->belongsToMany('Celulars', [
            'foreignKey' => 'representante_id',
            'targetForeignKey' => 'celular_id',
            'joinTable' => 'celulars_representantes'
        ]);
        $this->belongsToMany('Emails', [
            'foreignKey' => 'representante_id',
            'targetForeignKey' => 'email_id',
            'joinTable' => 'emails_representantes'
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
            ->allowEmpty('nome');

        $validator
            ->allowEmpty('atuacao');

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
        $rules->add($rules->existsIn(['estado_id'], 'Estados'));

        return $rules;
    }
}
