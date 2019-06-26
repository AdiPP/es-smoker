<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "gejala".
 *
 * @property int $idgejala
 * @property string $nmgejala
 *
 * @property Aturan[] $aturans
 */
class Gejala extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gejala';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nmgejala'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idgejala' => 'Idgejala',
            'nmgejala' => 'Nmgejala',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAturans()
    {
        return $this->hasMany(Aturan::className(), ['gejala' => 'idgejala']);
    }
}
