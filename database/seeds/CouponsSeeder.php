<?php
use Illuminate\Database\Seeder; class CouponsSeeder extends Seeder { public function run() { \App\Coupon::insert(array(array('user_id' => 2, 'category_id' => -1, 'product_id' => -1, 'type' => \App\Coupon::TYPE_REPEAT, 'status' => \App\Coupon::STATUS_NORMAL, 'coupon' => 'happy-new-year', 'discount_type' => \App\Coupon::DISCOUNT_TYPE_PERCENT, 'discount_val' => 10, 'count_used' => 0, 'count_all' => 10, 'remark' => '系统生成', 'expire_at' => (new \Carbon\Carbon())->addDay(30)))); } }