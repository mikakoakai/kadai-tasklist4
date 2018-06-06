{"filter":false,"title":"UsersController.php","tooltip":"/microposts/app/Http/Controllers/UsersController.php","undoManager":{"mark":16,"position":16,"stack":[[{"start":{"row":0,"column":0},"end":{"row":18,"column":1},"action":"insert","lines":["<?php","","namespace App\\Http\\Controllers;","","use Illuminate\\Http\\Request;","","use App\\User; // add","","class UsersController extends Controller","{","    public function index()","    {","        $users = User::all();","        ","        return view('users.index', [","            'users' => $users,","        ]);","    }","}"],"id":1}],[{"start":{"row":12,"column":27},"end":{"row":12,"column":28},"action":"remove","lines":[")"],"id":2},{"start":{"row":12,"column":26},"end":{"row":12,"column":27},"action":"remove","lines":["("]},{"start":{"row":12,"column":25},"end":{"row":12,"column":26},"action":"remove","lines":["l"]},{"start":{"row":12,"column":24},"end":{"row":12,"column":25},"action":"remove","lines":["l"]},{"start":{"row":12,"column":23},"end":{"row":12,"column":24},"action":"remove","lines":["a"]}],[{"start":{"row":12,"column":23},"end":{"row":12,"column":35},"action":"insert","lines":["paginate(10)"],"id":3}],[{"start":{"row":18,"column":1},"end":{"row":19,"column":0},"action":"insert","lines":["",""],"id":4}],[{"start":{"row":18,"column":1},"end":{"row":19,"column":0},"action":"remove","lines":["",""],"id":5},{"start":{"row":18,"column":0},"end":{"row":18,"column":1},"action":"remove","lines":["}"]}],[{"start":{"row":18,"column":0},"end":{"row":18,"column":54},"action":"insert","lines":["<li>{!! link_to_route('users.index', 'Users') !!}</li>"],"id":6}],[{"start":{"row":18,"column":53},"end":{"row":18,"column":54},"action":"remove","lines":[">"],"id":7},{"start":{"row":18,"column":52},"end":{"row":18,"column":53},"action":"remove","lines":["i"]},{"start":{"row":18,"column":51},"end":{"row":18,"column":52},"action":"remove","lines":["l"]},{"start":{"row":18,"column":50},"end":{"row":18,"column":51},"action":"remove","lines":["/"]},{"start":{"row":18,"column":49},"end":{"row":18,"column":50},"action":"remove","lines":["<"]},{"start":{"row":18,"column":48},"end":{"row":18,"column":49},"action":"remove","lines":["}"]},{"start":{"row":18,"column":47},"end":{"row":18,"column":48},"action":"remove","lines":["!"]},{"start":{"row":18,"column":46},"end":{"row":18,"column":47},"action":"remove","lines":["!"]},{"start":{"row":18,"column":45},"end":{"row":18,"column":46},"action":"remove","lines":[" "]},{"start":{"row":18,"column":44},"end":{"row":18,"column":45},"action":"remove","lines":[")"]},{"start":{"row":18,"column":43},"end":{"row":18,"column":44},"action":"remove","lines":["'"]},{"start":{"row":18,"column":42},"end":{"row":18,"column":43},"action":"remove","lines":["s"]},{"start":{"row":18,"column":41},"end":{"row":18,"column":42},"action":"remove","lines":["r"]},{"start":{"row":18,"column":40},"end":{"row":18,"column":41},"action":"remove","lines":["e"]},{"start":{"row":18,"column":39},"end":{"row":18,"column":40},"action":"remove","lines":["s"]},{"start":{"row":18,"column":38},"end":{"row":18,"column":39},"action":"remove","lines":["U"]},{"start":{"row":18,"column":37},"end":{"row":18,"column":38},"action":"remove","lines":["'"]},{"start":{"row":18,"column":36},"end":{"row":18,"column":37},"action":"remove","lines":[" "]},{"start":{"row":18,"column":35},"end":{"row":18,"column":36},"action":"remove","lines":[","]},{"start":{"row":18,"column":34},"end":{"row":18,"column":35},"action":"remove","lines":["'"]},{"start":{"row":18,"column":33},"end":{"row":18,"column":34},"action":"remove","lines":["x"]},{"start":{"row":18,"column":32},"end":{"row":18,"column":33},"action":"remove","lines":["e"]},{"start":{"row":18,"column":31},"end":{"row":18,"column":32},"action":"remove","lines":["d"]},{"start":{"row":18,"column":30},"end":{"row":18,"column":31},"action":"remove","lines":["n"]},{"start":{"row":18,"column":29},"end":{"row":18,"column":30},"action":"remove","lines":["i"]},{"start":{"row":18,"column":28},"end":{"row":18,"column":29},"action":"remove","lines":["."]},{"start":{"row":18,"column":27},"end":{"row":18,"column":28},"action":"remove","lines":["s"]},{"start":{"row":18,"column":26},"end":{"row":18,"column":27},"action":"remove","lines":["r"]},{"start":{"row":18,"column":25},"end":{"row":18,"column":26},"action":"remove","lines":["e"]},{"start":{"row":18,"column":24},"end":{"row":18,"column":25},"action":"remove","lines":["s"]},{"start":{"row":18,"column":23},"end":{"row":18,"column":24},"action":"remove","lines":["u"]},{"start":{"row":18,"column":22},"end":{"row":18,"column":23},"action":"remove","lines":["'"]},{"start":{"row":18,"column":21},"end":{"row":18,"column":22},"action":"remove","lines":["("]},{"start":{"row":18,"column":20},"end":{"row":18,"column":21},"action":"remove","lines":["e"]},{"start":{"row":18,"column":19},"end":{"row":18,"column":20},"action":"remove","lines":["t"]},{"start":{"row":18,"column":18},"end":{"row":18,"column":19},"action":"remove","lines":["u"]},{"start":{"row":18,"column":17},"end":{"row":18,"column":18},"action":"remove","lines":["o"]},{"start":{"row":18,"column":16},"end":{"row":18,"column":17},"action":"remove","lines":["r"]},{"start":{"row":18,"column":15},"end":{"row":18,"column":16},"action":"remove","lines":["_"]},{"start":{"row":18,"column":14},"end":{"row":18,"column":15},"action":"remove","lines":["o"]},{"start":{"row":18,"column":13},"end":{"row":18,"column":14},"action":"remove","lines":["t"]},{"start":{"row":18,"column":12},"end":{"row":18,"column":13},"action":"remove","lines":["_"]},{"start":{"row":18,"column":11},"end":{"row":18,"column":12},"action":"remove","lines":["k"]},{"start":{"row":18,"column":10},"end":{"row":18,"column":11},"action":"remove","lines":["n"]},{"start":{"row":18,"column":9},"end":{"row":18,"column":10},"action":"remove","lines":["i"]},{"start":{"row":18,"column":8},"end":{"row":18,"column":9},"action":"remove","lines":["l"]},{"start":{"row":18,"column":7},"end":{"row":18,"column":8},"action":"remove","lines":[" "]},{"start":{"row":18,"column":6},"end":{"row":18,"column":7},"action":"remove","lines":["!"]},{"start":{"row":18,"column":5},"end":{"row":18,"column":6},"action":"remove","lines":["!"]},{"start":{"row":18,"column":4},"end":{"row":18,"column":5},"action":"remove","lines":["{"]},{"start":{"row":18,"column":3},"end":{"row":18,"column":4},"action":"remove","lines":[">"]},{"start":{"row":18,"column":2},"end":{"row":18,"column":3},"action":"remove","lines":["i"]},{"start":{"row":18,"column":1},"end":{"row":18,"column":2},"action":"remove","lines":["l"]}],[{"start":{"row":18,"column":0},"end":{"row":18,"column":1},"action":"remove","lines":["<"],"id":8}],[{"start":{"row":18,"column":0},"end":{"row":18,"column":54},"action":"insert","lines":["<li>{!! link_to_route('users.index', 'Users') !!}</li>"],"id":9}],[{"start":{"row":18,"column":53},"end":{"row":18,"column":54},"action":"remove","lines":[">"],"id":10},{"start":{"row":18,"column":52},"end":{"row":18,"column":53},"action":"remove","lines":["i"]},{"start":{"row":18,"column":51},"end":{"row":18,"column":52},"action":"remove","lines":["l"]},{"start":{"row":18,"column":50},"end":{"row":18,"column":51},"action":"remove","lines":["/"]},{"start":{"row":18,"column":49},"end":{"row":18,"column":50},"action":"remove","lines":["<"]},{"start":{"row":18,"column":48},"end":{"row":18,"column":49},"action":"remove","lines":["}"]},{"start":{"row":18,"column":47},"end":{"row":18,"column":48},"action":"remove","lines":["!"]},{"start":{"row":18,"column":46},"end":{"row":18,"column":47},"action":"remove","lines":["!"]},{"start":{"row":18,"column":45},"end":{"row":18,"column":46},"action":"remove","lines":[" "]},{"start":{"row":18,"column":44},"end":{"row":18,"column":45},"action":"remove","lines":[")"]},{"start":{"row":18,"column":43},"end":{"row":18,"column":44},"action":"remove","lines":["'"]},{"start":{"row":18,"column":42},"end":{"row":18,"column":43},"action":"remove","lines":["s"]},{"start":{"row":18,"column":41},"end":{"row":18,"column":42},"action":"remove","lines":["r"]},{"start":{"row":18,"column":40},"end":{"row":18,"column":41},"action":"remove","lines":["e"]},{"start":{"row":18,"column":39},"end":{"row":18,"column":40},"action":"remove","lines":["s"]},{"start":{"row":18,"column":38},"end":{"row":18,"column":39},"action":"remove","lines":["U"]},{"start":{"row":18,"column":37},"end":{"row":18,"column":38},"action":"remove","lines":["'"]},{"start":{"row":18,"column":36},"end":{"row":18,"column":37},"action":"remove","lines":[" "]},{"start":{"row":18,"column":35},"end":{"row":18,"column":36},"action":"remove","lines":[","]},{"start":{"row":18,"column":34},"end":{"row":18,"column":35},"action":"remove","lines":["'"]},{"start":{"row":18,"column":33},"end":{"row":18,"column":34},"action":"remove","lines":["x"]},{"start":{"row":18,"column":32},"end":{"row":18,"column":33},"action":"remove","lines":["e"]},{"start":{"row":18,"column":31},"end":{"row":18,"column":32},"action":"remove","lines":["d"]},{"start":{"row":18,"column":30},"end":{"row":18,"column":31},"action":"remove","lines":["n"]},{"start":{"row":18,"column":29},"end":{"row":18,"column":30},"action":"remove","lines":["i"]},{"start":{"row":18,"column":28},"end":{"row":18,"column":29},"action":"remove","lines":["."]},{"start":{"row":18,"column":27},"end":{"row":18,"column":28},"action":"remove","lines":["s"]},{"start":{"row":18,"column":26},"end":{"row":18,"column":27},"action":"remove","lines":["r"]},{"start":{"row":18,"column":25},"end":{"row":18,"column":26},"action":"remove","lines":["e"]},{"start":{"row":18,"column":24},"end":{"row":18,"column":25},"action":"remove","lines":["s"]},{"start":{"row":18,"column":23},"end":{"row":18,"column":24},"action":"remove","lines":["u"]},{"start":{"row":18,"column":22},"end":{"row":18,"column":23},"action":"remove","lines":["'"]},{"start":{"row":18,"column":21},"end":{"row":18,"column":22},"action":"remove","lines":["("]},{"start":{"row":18,"column":20},"end":{"row":18,"column":21},"action":"remove","lines":["e"]},{"start":{"row":18,"column":19},"end":{"row":18,"column":20},"action":"remove","lines":["t"]},{"start":{"row":18,"column":18},"end":{"row":18,"column":19},"action":"remove","lines":["u"]},{"start":{"row":18,"column":17},"end":{"row":18,"column":18},"action":"remove","lines":["o"]},{"start":{"row":18,"column":16},"end":{"row":18,"column":17},"action":"remove","lines":["r"]},{"start":{"row":18,"column":15},"end":{"row":18,"column":16},"action":"remove","lines":["_"]},{"start":{"row":18,"column":14},"end":{"row":18,"column":15},"action":"remove","lines":["o"]},{"start":{"row":18,"column":13},"end":{"row":18,"column":14},"action":"remove","lines":["t"]},{"start":{"row":18,"column":12},"end":{"row":18,"column":13},"action":"remove","lines":["_"]},{"start":{"row":18,"column":11},"end":{"row":18,"column":12},"action":"remove","lines":["k"]},{"start":{"row":18,"column":10},"end":{"row":18,"column":11},"action":"remove","lines":["n"]},{"start":{"row":18,"column":9},"end":{"row":18,"column":10},"action":"remove","lines":["i"]},{"start":{"row":18,"column":8},"end":{"row":18,"column":9},"action":"remove","lines":["l"]},{"start":{"row":18,"column":7},"end":{"row":18,"column":8},"action":"remove","lines":[" "]},{"start":{"row":18,"column":6},"end":{"row":18,"column":7},"action":"remove","lines":["!"]},{"start":{"row":18,"column":5},"end":{"row":18,"column":6},"action":"remove","lines":["!"]},{"start":{"row":18,"column":4},"end":{"row":18,"column":5},"action":"remove","lines":["{"]},{"start":{"row":18,"column":3},"end":{"row":18,"column":4},"action":"remove","lines":[">"]},{"start":{"row":18,"column":2},"end":{"row":18,"column":3},"action":"remove","lines":["i"]},{"start":{"row":18,"column":1},"end":{"row":18,"column":2},"action":"remove","lines":["l"]}],[{"start":{"row":18,"column":0},"end":{"row":18,"column":1},"action":"remove","lines":["<"],"id":11},{"start":{"row":17,"column":5},"end":{"row":18,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":17,"column":5},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":12},{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":18,"column":4},"end":{"row":25,"column":5},"action":"insert","lines":["public function show($id)","    {","        $user = User::find($id);","","        return view('users.show', [","            'user' => $user,","        ]);","    }"],"id":13}],[{"start":{"row":25,"column":5},"end":{"row":26,"column":0},"action":"insert","lines":["",""],"id":14},{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":26,"column":4},"end":{"row":26,"column":5},"action":"insert","lines":["]"],"id":15},{"start":{"row":26,"column":5},"end":{"row":26,"column":6},"action":"insert","lines":["\\"]}],[{"start":{"row":26,"column":5},"end":{"row":26,"column":6},"action":"remove","lines":["\\"],"id":16},{"start":{"row":26,"column":4},"end":{"row":26,"column":5},"action":"remove","lines":["]"]}],[{"start":{"row":26,"column":4},"end":{"row":26,"column":5},"action":"insert","lines":["}"],"id":17},{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"remove","lines":["    "]}]]},"ace":{"folds":[],"scrolltop":185.109375,"scrollleft":0,"selection":{"start":{"row":26,"column":1},"end":{"row":26,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1528250279360,"hash":"7046868c0187747eac966ceb7ce7081c3ecc80bc"}