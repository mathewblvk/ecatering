<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\Branch]].
 *
 * @see \common\models\Branch
 */
class BranchQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\Branch[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\Branch|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
