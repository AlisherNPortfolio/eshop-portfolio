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
            CREATE MATERIALIZED VIEW product_views
            AS
                select
                p.*,
                s.name as shop_name,
                s.unique_name as shop_unique_name,
                b.name as brand,
                b.logo as brand_logo,
                c.name as category
                from public.products p
                inner join public.shops s on s.id = p.shop_id
                inner join public.brands b on p.brand_id = b.id
                inner join public.categories c on p.category_id = c.id
                group by p.id, s.id, b.id, c.id;
        ");

        DB::statement("REFRESH MATERIALIZED VIEW product_views");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS product_views');
    }
};
