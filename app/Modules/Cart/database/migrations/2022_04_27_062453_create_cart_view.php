<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateCartView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE VIEW cart_views
            AS
                select
                c.*,
                poi.product_id,
                poi.price,
                poi.qty as stock_qty,
                p.name as product_name,
                p.sku,
                p.image,
                p.user_id,
                p.unique_name as product_slug,
                poi.price*c.qty as total_price
                from public.carts c
                inner join public.product_option_items poi on poi.id = c.product_option_item_id
                inner join public.products p on poi.product_id = p.id
                order by poi.product_id, c.id;
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS cart_views");
    }
}
