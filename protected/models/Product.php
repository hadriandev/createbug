<?php

/**
 * This is the model class for table "product".
 *
 * The followings are the available columns in table 'product':
 * @property integer $id
 * @property string $name
 * @property integer $brand_id
 * @property string $dosage_form
 * @property string $pack_size
 * @property string $strength
 * @property string $description
 * @property string $retail_price
 * @property string $discounted_price
 * @property string $applicable_price
 * @property string $percentage_discount
 * @property string $shipping_charges
 * @property integer $quantity
 * @property integer $item_sold
 * @property string $customer_message
 * @property integer $image_version1
 * @property integer $image_version2
 * @property integer $image_version3
 * @property integer $image_version4
 * @property integer $image_version5
 * @property integer $out_of_stock
 * @property string $meta
 * @property integer $status
 * @property integer $sync_status
 * @property string $created_at
 * @property string $updated_at
 */
class Product extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, brand_id, dosage_form, pack_size, strength, out_of_stock, status, created_at, updated_at', 'required'),
			array('brand_id, quantity, item_sold, image_version1, image_version2, image_version3, image_version4, image_version5, out_of_stock, status, sync_status', 'numerical', 'integerOnly'=>true),
			array('name, dosage_form, pack_size, strength', 'length', 'max'=>255),
			array('retail_price, discounted_price, applicable_price, percentage_discount, shipping_charges', 'length', 'max'=>10),
			array('description, customer_message, meta', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, brand_id, dosage_form, pack_size, strength, description, retail_price, discounted_price, applicable_price, percentage_discount, shipping_charges, quantity, item_sold, customer_message, image_version1, image_version2, image_version3, image_version4, image_version5, out_of_stock, meta, status, sync_status, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'brand_id' => 'Brand',
			'dosage_form' => 'Dosage Form',
			'pack_size' => 'Pack Size',
			'strength' => 'Strength',
			'description' => 'Description',
			'retail_price' => 'Retail Price',
			'discounted_price' => 'Discounted Price',
			'applicable_price' => 'Applicable Price',
			'percentage_discount' => 'Percentage Discount',
			'shipping_charges' => 'Shipping Charges',
			'quantity' => 'Quantity',
			'item_sold' => 'Item Sold',
			'customer_message' => 'Customer Message',
			'image_version1' => 'Image Version1',
			'image_version2' => 'Image Version2',
			'image_version3' => 'Image Version3',
			'image_version4' => 'Image Version4',
			'image_version5' => 'Image Version5',
			'out_of_stock' => 'Out Of Stock',
			'meta' => 'Meta',
			'status' => 'Status',
			'sync_status' => 'Sync Status',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('brand_id',$this->brand_id);
		$criteria->compare('dosage_form',$this->dosage_form,true);
		$criteria->compare('pack_size',$this->pack_size,true);
		$criteria->compare('strength',$this->strength,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('retail_price',$this->retail_price,true);
		$criteria->compare('discounted_price',$this->discounted_price,true);
		$criteria->compare('applicable_price',$this->applicable_price,true);
		$criteria->compare('percentage_discount',$this->percentage_discount,true);
		$criteria->compare('shipping_charges',$this->shipping_charges,true);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('item_sold',$this->item_sold);
		$criteria->compare('customer_message',$this->customer_message,true);
		$criteria->compare('image_version1',$this->image_version1);
		$criteria->compare('image_version2',$this->image_version2);
		$criteria->compare('image_version3',$this->image_version3);
		$criteria->compare('image_version4',$this->image_version4);
		$criteria->compare('image_version5',$this->image_version5);
		$criteria->compare('out_of_stock',$this->out_of_stock);
		$criteria->compare('meta',$this->meta,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('sync_status',$this->sync_status);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Product the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
