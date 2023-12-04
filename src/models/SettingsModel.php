<?php

namespace craftyfm\filemaker\models;

use Craft;
use craft\base\Model;

/**
 * filemaker settings
 */
class SettingsModel extends Model
{
    public $user = 'admin';
    public $pass = 'passw0rd123';
    public $authURL = 'https://filemaker.com/';

    public function defineRules(): array
    {
        return [
            [['user', 'pass', 'authURL'], 'required'],
            // ...
        ];
    }
}
