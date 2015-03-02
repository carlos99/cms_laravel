<?php
/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 03-01-15
 * Time: 10:56 PM
 */

class Section extends Eloquent {
    protected $fillable = ['name', 'slug_url', 'type'];
}