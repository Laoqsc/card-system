<?php
namespace App; use Illuminate\Database\Eloquent\Model; class File extends Model { protected $guarded = array(); public $timestamps = false; function deleteFile() { try { Storage::disk($this->driver)->delete($this->path); } catch (\Exception $sp019ea9) { \Log::error('File.deleteFile Error: ' . $sp019ea9->getMessage(), array('exception' => $sp019ea9)); } } public static function getProductFolder() { return 'images/product'; } }