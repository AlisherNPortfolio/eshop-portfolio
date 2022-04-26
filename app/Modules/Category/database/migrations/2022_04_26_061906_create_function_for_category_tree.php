<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateFunctionForCategoryTree extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->down();
        DB::statement('
            CREATE OR REPLACE FUNCTION menu_tree(pId integer)
            RETURNS table (id bigint, name text, lft int4, rgt int4, depth int2, parent_id int8)
            AS $$
            BEGIN
                RETURN QUERY WITH RECURSIVE cat_tree (id, name, lft, rgt, depth, parent_id) AS (
                    SELECT
                        categories.id,
                        categories."name",
                        categories.lft,
                        categories.rgt,
                        categories."depth",
                        categories.parent_id
                    FROM categories
                    WHERE categories.parent_id = pId

                    UNION ALL

                    SELECT
                        child.id,
                        child."name",
                        child.lft,
                        child.rgt,
                        child."depth",
                        child.parent_id
                    FROM categories AS child, cat_tree AS ct
                    WHERE child.parent_id = ct.id
                )
                SELECT * FROM cat_tree
                WHERE cat_tree."depth" > 0
                ORDER BY cat_tree."depth", cat_tree.parent_id;
            END;
            $$ LANGUAGE plpgsql;
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP FUNCTION IF EXISTS menu_tree(integer)");
    }
}
