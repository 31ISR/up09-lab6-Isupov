public function up(): void
{
    Schema::create('notes', function (Blueprint $table) {
        $table->id();
        $table->longText('note');

        $table->foreignId('user_id')->constrained('users');
        $table->timestamps();
    });
}