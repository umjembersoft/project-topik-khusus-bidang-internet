<?php

/**
 * This is the model class for table "tbl_mkuliah".
 *
 * The followings are the available columns in table 'tbl_mkuliah':
 * @property integer $id
 * @property string $matakuliah
 * @property integer $sks
 * @property integer $semester
 * @property string $jenis
 *
 * The followings are the available model relations:
 * @property TblKrs[] $tblKrs
 */
class TblMkuliah extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TblMkuliah the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_mkuliah';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sks, semester', 'numerical', 'integerOnly'=>true),
			array('matakuliah', 'length', 'max'=>30),
			array('ruang', 'length', 'max'=>5),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, matakuliah, sks, semester, ruang', 'safe', 'on'=>'search'),
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
			'tblKrs' => array(self::HAS_MANY, 'TblKrs', 'mkuliah_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'matakuliah' => 'Matakuliah',
			'sks' => 'Sks',
			'semester' => 'Semester',
			'ruang' => 'Ruang',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('matakuliah',$this->matakuliah,true);
		$criteria->compare('sks',$this->sks);
		$criteria->compare('semester',$this->semester);
		$criteria->compare('ruang',$this->ruang,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}