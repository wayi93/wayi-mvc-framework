<?php
/**
 * Created by WaYi
 * Author: Ying Wang
 * Date: 2019-05-21
 * Time: 14:53
 */

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['username', 'password', 'email', 'firstname', 'lastname', 'role_id'];
}