{"changed":true,"filter":false,"title":"2014_10_12_000000_create_users_table.php","tooltip":"/microposts/database/migrations/2014_10_12_000000_create_users_table.php","value":"<?php\n\nuse Illuminate\\Support\\Facades\\Schema;\nuse Illuminate\\Database\\Schema\\Blueprint;\nuse Illuminate\\Database\\Migrations\\Migration;\n\nclass CreateUsersTable extends Migration\n{\n    /**\n     * Run the migrations.\n     *\n     * @return void\n     */\n    public function up()\n    {\n        Schema::create('users', function (Blueprint $table) {\n            $table->increments('id');\n            $table->string('name');\n            $table->string('email')->unique();\n            $table->string('password');\n            $table->rememberToken();\n            $table->timestamps();\n        });\n    }\n\n    /**\n     * Reverse the migrations.\n     *\n     * @return void\n     */\n    public function down()\n    {\n        Schema::dropIfExists('users');\n    }\n}\n","undoManager":{"mark":-2,"position":1,"stack":[[{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"insert","lines":["p"],"id":2},{"start":{"row":0,"column":1},"end":{"row":0,"column":2},"action":"insert","lines":["h"]},{"start":{"row":0,"column":2},"end":{"row":0,"column":3},"action":"insert","lines":["p"]}],[{"start":{"row":0,"column":2},"end":{"row":0,"column":3},"action":"remove","lines":["p"],"id":3},{"start":{"row":0,"column":1},"end":{"row":0,"column":2},"action":"remove","lines":["h"]},{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"remove","lines":["p"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":0,"column":0},"end":{"row":0,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1528246198305}