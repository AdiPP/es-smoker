<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penyakit".
 *
 * @property int $idpenyakit
 * @property string $nmpenyakit
 * @property string $definisi
 * @property string $penyebab
 * @property string $solusi
 *
 * @property Aturan[] $aturans
 */
class Penyakit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penyakit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['definisi', 'penyebab', 'solusi'], 'string'],
            [['nmpenyakit'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idpenyakit' => 'Idpenyakit',
            'nmpenyakit' => 'Nmpenyakit',
            'definisi' => 'Definisi',
            'penyebab' => 'Penyebab',
            'solusi' => 'Solusi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAturans()
    {
        return $this->hasMany(Aturan::className(), ['penyakit' => 'idpenyakit']);
    }
}
