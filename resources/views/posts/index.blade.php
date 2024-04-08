<!DOCTYPE html>
<x-app-layout>
    <x-slot name="header">
        　index
    </x-slot>
   
   <body>
        <h1>Blog Name</h1>
        <a href="/posts/create">create</a>
            <div class='posts'>
                @foreach($questions as $question)
            </div>
            <a href="https://terarail.com/questions/{{ $question['id'] }}">
            {{$question['title'] }}
            </a>
            </div>
        @endforeach
        </div>
    </body>    
        <div class='paginate'>{{ $posts->links()}}</div>
        <script>
            function deletePost(id) {
                'use strict'
                
                if(confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById('form_${id}').submit();
                }
            }
        </script>
    </x-app-layout>
</html>