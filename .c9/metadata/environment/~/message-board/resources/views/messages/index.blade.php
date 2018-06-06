{"changed":true,"filter":false,"title":"index.blade.php","tooltip":"~/message-board/resources/views/messages/index.blade.php","value":"@extends('layouts.app')\n\n@section('content')\n\n<h1>メッセージ一覧</h1>\n\n    @if (count($messages) > 0)\n        <table class=\"table table-striped\">\n            <thead>\n                <tr>\n                    <th>id</th>\n                    <th>タイトル</th>\n                    <th>メッセージ</th>\n                </tr>\n            </thead>\n            <tbody>\n                @foreach ($messages as $message)\n                    <tr>\n                        <td>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!}</td>\n                        <td>{{ $message->title }}</td>\n                        <td>{{ $message->content }}</td>\n                    </tr>\n                @endforeach\n            </tbody>\n        </table>\n    @endif\n   {!! link_to_route('messages.create', '新規メッセージの投稿', null, ['class' => 'btn btn-primary']) !!}\n@endsection","undoManager":{"mark":1,"position":3,"stack":[[{"start":{"row":7,"column":8},"end":{"row":11,"column":13},"action":"remove","lines":["<ul>","            @foreach ($messages as $message)","                <li>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!} : {{ $message->content }}</li>","            @endforeach","        </ul>"],"id":2}],[{"start":{"row":7,"column":8},"end":{"row":24,"column":16},"action":"insert","lines":["<table class=\"table table-striped\">","            <thead>","                <tr>","                    <th>id</th>","                    <th>タイトル</th>","                    <th>メッセージ</th>","                </tr>","            </thead>","            <tbody>","                @foreach ($messages as $message)","                    <tr>","                        <td>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!}</td>","                        <td>{{ $message->title }}</td>","                        <td>{{ $message->content }}</td>","                    </tr>","                @endforeach","            </tbody>","        </table>"],"id":3}],[{"start":{"row":26,"column":3},"end":{"row":26,"column":57},"action":"remove","lines":["{!! link_to_route('messages.create', '新規メッセージの投稿') !!}"],"id":4}],[{"start":{"row":26,"column":3},"end":{"row":26,"column":95},"action":"insert","lines":["{!! link_to_route('messages.create', '新規メッセージの投稿', null, ['class' => 'btn btn-primary']) !!}"],"id":5}]]},"ace":{"folds":[],"scrolltop":241.34375,"scrollleft":0,"selection":{"start":{"row":26,"column":95},"end":{"row":26,"column":95},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":16,"state":"start","mode":"ace/mode/php"}},"timestamp":1527563979912}