Schema::create('tasks', function (Blueprint $table){
    $table->increments('id');
    $table->longtext('body');
    $table->timestamps();
});