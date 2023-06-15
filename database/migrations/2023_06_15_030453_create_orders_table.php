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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('CustomerID');
            $table->unsignedBigInteger('EmployeeID');
            $table->timestamp('OrderDate')->nullable();
            $table->timestamp('RequiredDate')->nullable();
            $table->timestamp('ShippedDate')->nullable();
            $table->unsignedBigInteger('ShipVia');
            $table->decimal('Freight');
            $table->string('ShipName');
            $table->string('ShipAddress');
            $table->string('ShipCity');
            $table->string('ShipRegion');
            $table->string('ShipPostalCode');
            $table->string('ShipCountry');
            $table->timestamps();

            $table->foreign('CustomerID')->references('CustomerID')->on('customers');
            $table->foreign('EmployeeID')->references('EmployeeID')->on('employee');
            $table->foreign('ShipVia')->references('ShipperID')->on('shippers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
