<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aturan".
 *
 * @property int $idaturan
 * @property int $penyakit
 * @property int $gejala
 *
 * @property Penyakit $penyakit0
 * @property Gejala $gejala0
 */
class Aturan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aturan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['penyakit', 'gejala'], 'required'],
            [['penyakit', 'gejala'], 'integer'],
            [['penyakit'], 'exist', 'skipOnError' => true, 'targetClass' => Penyakit::className(), 'targetAttribute' => ['penyakit' => 'idpenyakit']],
            [['gejala'], 'exist', 'skipOnError' => true, 'targetClass' => Gejala::className(), 'targetAttribute' => ['gejala' => 'idgejala']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idaturan' => 'Idaturan',
            'penyakit' => 'Penyakit',
            'gejala' => 'Gejala',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenyakit0()
    {
        return $this->hasOne(Penyakit::className(), ['idpenyakit' => 'penyakit']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGejala0()
    {
        return $this->hasOne(Gejala::className(), ['idgejala' => 'gejala']);
    }
}
