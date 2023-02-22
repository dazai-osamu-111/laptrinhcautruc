@extends('rate_comment.layout')

@section('content')
    <h2 style="text-align: center;">Rating and Comment</h2>
    <h4 style="margin-left:25px; font-weight:600">Rating</h4>
    <div style="margin-left: 20px" class="stars">
        <form action="/rate-comment-update/{{$userId}}" method="post">
            {{ csrf_field() }}
            <input class="star star-5" id="star-5" type="radio" name="rate" value="1"/>
            <label class="star star-5" for="star-5"></label>
            <input class="star star-4" id="star-4" type="radio" name="rate" value="2"/>
            <label class="star star-4" for="star-4"></label>
            <input class="star star-3" id="star-3" type="radio" name="rate" value="3"/>
            <label class="star star-3" for="star-3"></label>
            <input class="star star-2" id="star-2" type="radio" name="rate" value="4"/>   
            <label class="star star-2" for="star-2"></label>
            <input class="star star-1" id="star-1" type="radio" name="rate" value="5"/>
            <label class="star star-1" for="star-1"></label>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Comment</label>
                <input type="text" name="comment" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Please enter your comment for this order.</div>
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
@endsection