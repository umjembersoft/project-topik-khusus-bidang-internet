<?php

/**
 * This is the model class for table "peserta".
 *
 * The followings are the available columns in table 'peserta':
 * @property integer $id
 * @property integer $kelas_id
 * @property string $namapeserta
 * @property string $alamat
 * @property integer $jeniskelamin
 */
class Peserta extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Peserta the static model class
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
		return 'peserta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kelas_id, namapeserta, alamat, jeniskelamin', 'required'),
			array('kelas_id', 'numerical', 'integerOnly'=>true),
			array('namapeserta', 'length', 'max'=>555),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, kelas_id, namapeserta, alamat, jeniskelamin', 'safe', 'on'=>'search'),
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
      'kelas'=>array(self::BELONGS_TO,
      'kelas',
      'kelas_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'id',
			'kelas_id' => 'Kelas',
			'namapeserta' => 'Nama peserta',
			'alamat' => 'Alamat',
			'jeniskelamin' => 'Jeniskelamin',
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
		$criteria->compare('kelas_id',$this->kelas_id);
		$criteria->compare('namapeserta',$this->namapeserta,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('jeniskelamin',$this->jeniskelamin);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}