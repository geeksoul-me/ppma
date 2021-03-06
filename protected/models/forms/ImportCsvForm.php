<?php

class ImportCsvForm extends CFormModel
{

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $comment;

    /**
     * @return array
     */
    public function rules()
    {
        return array(
            array('comment', 'default', 'value' => null),
            array('name', 'default', 'value' => null),
            array('name', 'length', 'max' => 255, 'skipOnError' => true),
            array('password', 'required'),
            array('password', 'length', 'max' => 255, 'skipOnError' => true),
            array('url', 'default', 'value' => null),
            array('url', 'length', 'max' => 255, 'skipOnError' => true),
            array('username', 'default', 'value' => null),
            array('username', 'length', 'max' => 255, 'skipOnError' => true),
            array('tags', 'safe'),
        );
    }

    /**
     * @return array
     */
    public function attributeLabels()
    {
        return array(
            'forceSSL'                       => 'Force SSL/HTTPS using',
            'recentEntryWidgetEnabled'       => 'Enabled "Recent Entries" widget',
            'recentEntryWidgetCount'         => 'Number of entries in the "Recent Entries" widget',
            'mostViewedEntriesWidgetEnabled' => 'Enabled "Most Viewed" widget',
            'mostViewedEntriesWidgetCount'   => 'Number of entries in the "Most Viewed" widget',
        );
    }
}
