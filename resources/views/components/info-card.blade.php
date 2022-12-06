<a href="/meetups/show/{{$meetup['id']}}" class="card">
    <div class="inner-card">
        <div class="card-image" style="background:url({{asset('storage/' . $meetup->image)}}) no-repeat center/cover"></div>
        <h2 class="card-text card-time">{{ \Carbon\Carbon::parse($meetup->date)->format('j F, Y')}} - {{$meetup['time']}}</h2>
        <h3 class="card-text card-title">{{$meetup['name']}}</h3>
        <p class="card-text card-group">{{$meetup->user->username}}</p>
    </div>
</a>
    
    