use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('ProductName');
            $table->unsignedBigInteger('SupplierID');
            $table->unsignedBigInteger('CategoryID');
            $table->string('QuantityPerUnit');
            $table->decimal('UnitPrice');
            $table->unsignedBigInteger('UnitsInStock');
            $table->unsignedBigInteger('UnitsOnOrder');
            $table->unsignedBigInteger('ReorderLevel');
            $table->tinyInteger('Discontinued')->default(0);
            $table->timestamps();

            $table->foreign('SupplierID')->references('SupplierID')->on('suppliers');
            $table->foreign('CategoryID')->references('CategoryID')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
