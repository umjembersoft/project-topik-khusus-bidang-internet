<?php

/**
 * This is the model class for table "dataabsensi".
 *
 * The followings are the available columns in table 'dataabsensi':
 * @property integer $id
 * @property integer $peserta_id
 * @property integer $kelas_id
 * @property integer $pertemuanke
 * @property string $absensi
 */
class Dataabsensi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dataabsensi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('peserta_id, kelas_id, pertemuanke, absensi', 'required'),
			array('peserta_id, kelas_id, pertemuanke', 'numerical', 'integerOnly'=>true),
			array('absensi', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, peserta_id, kelas_id, pertemuanke, absensi', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'peserta_id' => 'Peserta',
			'kelas_id' => 'Kelas',
			'pertemuanke' => 'Pertemuanke',
			'absensi' => 'Absensi',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('peserta_id',$this->peserta_id);
		$criteria->compare('kelas_id',$this->kelas_id);
		$criteria->compare('pertemuanke',$this->pertemuanke);
		$criteria->compare('absensi',$this->absensi,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Dataabsensi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
