<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ent_usuarios".
 *
 * @property string $id_usuario
 * @property string $txt_token
 * @property string $txt_nombre
 * @property string $txt_apellido_paterno
 * @property string $tel_numero_celular
 * @property string $num_esferas
 * @property string $fch_creacion
 */
class EntUsuarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ent_usuarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['txt_token', 'txt_nombre', 'txt_apellido_paterno', 'tel_numero_celular','num_esferas'], 'required', 'message'=>'Campos requeridos'],
            [['num_esferas'], 'integer', 'message'=>'Debe ser un valor númerico'],
        	[['tel_numero_celular'], 'string', 'max' => 10, 'message'=>'Maximo 10 digitos'],
        	[['tel_numero_celular'], 'string', 'min' => 10, 'message'=>'Mínimo 10 digitos'],
            [['fch_creacion'], 'safe'],
            [['txt_token'], 'string', 'max' => 60],
            [['txt_nombre', 'txt_apellido_paterno', 'tel_numero_celular'], 'string', 'max' => 50],
            [['txt_token'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_usuario' => 'Id Usuario',
            'txt_token' => 'Txt Token',
            'txt_nombre' => 'Nombre',
            'txt_apellido_paterno' => 'Apellido Paterno',
            'tel_numero_celular' => 'Número Celular',
            'num_esferas' => 'Número Esferas',
            'fch_creacion' => 'Fch Creacion',
        ];
    }
}
