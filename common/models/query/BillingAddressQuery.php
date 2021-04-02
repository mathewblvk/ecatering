<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\BillingAddress]].
 *
 * @see \common\models\BillingAddress
 */
class BillingAddressQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\BillingAddress[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\BillingAddress|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
