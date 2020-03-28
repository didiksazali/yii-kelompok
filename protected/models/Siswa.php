<?php

/**
 * This is the model class for table "siswa".
 *
 * The followings are the available columns in table 'siswa':
 * @property integer $id_siswa
 * @property string $nis
 * @property string $nama
 * @property string $alamat
 * @property string $tempat_lahir
 * @property string $tgl_lahir
 * @property integer $id_agama
 * @property integer $id_jkel
 */
class Siswa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'siswa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nis, nama, alamat, tempat_lahir, tgl_lahir, id_agama, id_jkel', 'required'),
			array('id_agama, id_jkel', 'numerical', 'integerOnly'=>true),
			array('nis, tgl_lahir', 'length', 'max'=>25),
			array('nama, alamat, tempat_lahir', 'length', 'max'=>35),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_siswa, nis, nama, alamat, tempat_lahir, tgl_lahir, id_agama, id_jkel', 'safe', 'on'=>'search'),
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

			'idAgama' => array(self::BELONGS_TO, 'Agama', 'id_agama'),
			'idJenisKelamin' => array(self::BELONGS_TO, 'JenisKelamin', 'id_jkel')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_siswa' => 'Id Siswa',
			'nis' => 'Nis',
			'nama' => 'Nama',
			'alamat' => 'Alamat',
			'tempat_lahir' => 'Tempat Lahir',
			'tgl_lahir' => 'Tgl Lahir',
			'id_agama' => 'Agama',
			'id_jkel' => 'Jenis Kelamin',
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

		$criteria->compare('id_siswa',$this->id_siswa);
		$criteria->compare('nis',$this->nis,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('tempat_lahir',$this->tempat_lahir,true);
		$criteria->compare('tgl_lahir',$this->tgl_lahir,true);
		$criteria->compare('id_agama',$this->id_agama);
		$criteria->compare('id_jkel',$this->id_jkel);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Siswa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
