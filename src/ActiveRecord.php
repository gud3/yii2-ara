<?php

namespace gud3\ara;

use Yii;

/**
 * Class ActiveRecord
 * @package gud3\ara
 */
class ActiveRecord extends \yii\db\ActiveRecord
{
    use ErrorTrait;
    /**
     * @inheritdoc
     */
    public static function find()
    {
        return Yii::createObject(ActiveQuery::className(), [get_called_class()]);
    }
}
