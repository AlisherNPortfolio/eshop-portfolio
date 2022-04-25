<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE VIEW product_list
                AS
                select
                p.id,
                p.image,
                p.product_status,
                p.shop_id,
                p.stock_status,
                p.recommended,
                p.\"name\",
                p.unique_name,
                p.category_id,
                poi.price,
                poi.qty,
                poi.is_default,
                s.\"name\" as shop_name,
                s.unique_name as shop_slug
                from public.products p
                inner join public.product_option_items poi on poi.product_id = p.id
                inner join  public.shops s on p.shop_id = s.id
                where poi.is_default = 1
                group by p.id, poi.id, s.\"name\", s.unique_name;
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS product_list');
    }
};
