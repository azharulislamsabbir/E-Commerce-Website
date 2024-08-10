<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $brandName
 * @property string $brandImg
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Brand newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand query()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereBrandImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereBrandName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereUpdatedAt($value)
 */
	class Brand extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $categoryName
 * @property string $categoryImg
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCategoryImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCategoryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $cus_name
 * @property string $cus_add
 * @property string $cus_city
 * @property string $cus_state
 * @property string $cus_postcode
 * @property string $cus_country
 * @property string $cus_phone
 * @property string $cus_fax
 * @property string $ship_name
 * @property string $ship_add
 * @property string $ship_city
 * @property string $ship_state
 * @property string $ship_postcode
 * @property string $ship_country
 * @property string $ship_phone
 * @property int $user_id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerProfile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerProfile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerProfile query()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerProfile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerProfile whereCusAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerProfile whereCusCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerProfile whereCusCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerProfile whereCusFax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerProfile whereCusName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerProfile whereCusPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerProfile whereCusPostcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerProfile whereCusState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerProfile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerProfile whereShipAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerProfile whereShipCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerProfile whereShipCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerProfile whereShipName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerProfile whereShipPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerProfile whereShipPostcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerProfile whereShipState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerProfile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerProfile whereUserId($value)
 */
	class CustomerProfile extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $total
 * @property string $vat
 * @property string $payable
 * @property string $cus_details
 * @property string $ship_details
 * @property string $tran_id
 * @property string $val_id
 * @property string $delivery_status
 * @property string $payment_status
 * @property int $user_id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice query()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereCusDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereDeliveryStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice wherePayable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice wherePaymentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereShipDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereTranId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereValId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereVat($value)
 */
	class Invoice extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $invoice_id
 * @property int $product_id
 * @property int $user_id
 * @property string $qty
 * @property string $sale_price
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \App\Models\Product $product
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceProduct whereInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceProduct whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceProduct whereQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceProduct whereSalePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceProduct whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceProduct whereUserId($value)
 */
	class InvoiceProduct extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $type
 * @property string $des
 * @method static \Illuminate\Database\Eloquent\Builder|Policy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Policy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Policy query()
 * @method static \Illuminate\Database\Eloquent\Builder|Policy whereDes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Policy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Policy whereType($value)
 */
	class Policy extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static where(string $string, mixed $id)
 * @property int $id
 * @property string $title
 * @property string $short_des
 * @property string $price
 * @property int $discount
 * @property string $discount_price
 * @property string $image
 * @property int $stock
 * @property float $star
 * @property string $remark
 * @property int $category_id
 * @property int $brand_id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \App\Models\Brand $brand
 * @property-read \App\Models\Category $category
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDiscountPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereShortDes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereStar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 */
	class Product extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property int $product_id
 * @property string $color
 * @property string $size
 * @property string $qty
 * @property string $price
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \App\Models\Product $product
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCart newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCart newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCart query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCart whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCart whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCart whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCart wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCart whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCart whereQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCart whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCart whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCart whereUserId($value)
 */
	class ProductCart extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $img1
 * @property string $img2
 * @property string $img3
 * @property string $img4
 * @property string $des
 * @property string $color
 * @property string $size
 * @property int $product_id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \App\Models\Product $product
 * @method static \Illuminate\Database\Eloquent\Builder|ProductDetails newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductDetails newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductDetails query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductDetails whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductDetails whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductDetails whereDes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductDetails whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductDetails whereImg1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductDetails whereImg2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductDetails whereImg3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductDetails whereImg4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductDetails whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductDetails whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductDetails whereUpdatedAt($value)
 */
	class ProductDetails extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $description
 * @property string $rating
 * @property int $customer_id
 * @property int $product_id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \App\Models\CustomerProfile $profile
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview whereUpdatedAt($value)
 */
	class ProductReview extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property string $short_des
 * @property string $price
 * @property string $image
 * @property int $product_id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSlider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSlider newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSlider query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSlider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSlider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSlider whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSlider wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSlider whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSlider whereShortDes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSlider whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSlider whereUpdatedAt($value)
 */
	class ProductSlider extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $product_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \App\Models\Product $product
 * @method static \Illuminate\Database\Eloquent\Builder|ProductWish newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductWish newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductWish query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductWish whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductWish whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductWish whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductWish whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductWish whereUserId($value)
 */
	class ProductWish extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $store_id
 * @property string $store_passwd
 * @property string $currency
 * @property string $success_url
 * @property string $fail_url
 * @property string $cancel_url
 * @property string $ipn_url
 * @property string $init_url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SslcommerzAccount newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SslcommerzAccount newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SslcommerzAccount query()
 * @method static \Illuminate\Database\Eloquent\Builder|SslcommerzAccount whereCancelUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SslcommerzAccount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SslcommerzAccount whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SslcommerzAccount whereFailUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SslcommerzAccount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SslcommerzAccount whereInitUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SslcommerzAccount whereIpnUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SslcommerzAccount whereStoreId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SslcommerzAccount whereStorePasswd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SslcommerzAccount whereSuccessUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SslcommerzAccount whereUpdatedAt($value)
 */
	class SslcommerzAccount extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $email
 * @property string $otp
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \App\Models\CustomerProfile|null $profile
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereOtp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

