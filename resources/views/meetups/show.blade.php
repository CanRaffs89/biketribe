{{-- SHOWs details for a single meetup --}}
<x-layout>
    <div class="small-container">
        <div class="meetup-details-container">
            <div class="meetup-details-first">
                <h1 class="hidden-on-mobile">{{$meetup['name']}}</h1>
                <div class="meetup-details-image" style="background:url({{asset('storage/' . $meetup->image)}}) no-repeat center/cover"></div>
                <p>{{$meetup['description']}}</p>
            </div>
            <div class="meetup-details-second">
                <h1 class="hidden-on-desktop">{{$meetup['name']}}</h1>
                <div class="meetup-group-card">
                    <img src="{{asset('img/user.png')}}" alt="" class="meetup-details-group-img">
                    <div class="meetup-details-group">
                        <h4>Hosted by</h4>
                        <h3>{{$meetup->user->username}}</h3>
                    </div>
                </div>
                <ul class="meetup-details-info">
                    <li><img class="meetup-details-icon" src="{{asset('img/location-dot-solid.svg')}}" alt="">{{$meetup['location']}}</li>
                    <li><img class="meetup-details-icon" src="{{asset('img/calendar-regular.svg')}}" alt="">{{ \Carbon\Carbon::parse($meetup->date)->format('j F, Y')}}</li> 
                    <li><img class="meetup-details-icon" src="{{asset('img/clock-solid.svg')}}" alt="">{{$meetup['time']}}</li> 
                </ul>
            </div>
        </div>
    </div>
</x-layout>