@extends('index')

    @section('home')
        <div class="section container">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="has-text-danger">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/home/create_post" method="post">
                @csrf
                <div class="field">
                    <label class="label">Title</label>
                    <div class="control">
                        <input class="input" type="text" name="title" placeholder="Input title">
                    </div>
                </div>

                <div class="field">
                    <label class="label">Message</label>
                    <div class="control">
                        <textarea class="textarea" name="message" placeholder="Textarea"></textarea>
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link">Submit</button>
                    </div>
                    <div class="control">
                        <a href="/home" class="button is-link is-light">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    @endsection
