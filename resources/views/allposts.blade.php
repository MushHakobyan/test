@extends('home')

    @section('posts')
        @if(isset($allposts))
            @foreach($allposts as $post)
                <article class="message">
                    <div class="message-header">
                        <p>{{$post->title}}</p>
                        @if($post->users_id == $id)
                            <div class="buttons">
                                <button class="button is-info is-small">show</button>
                                <butonn class="button is-warning is-small">edit</butonn>
                                <form method="post" action="/home/{{$post->id}}" >
                                    @csrf
                                    @method('delete')
                                    <button class="button is-danger is-small" type="submit">delete</button>
                                </form>
                            </div>
                        @endif
                    </div>
                    <div class="message-body">
                        {{$post->message}}
                    </div>
                </article>
            @endforeach
        @endif
    @endsection
