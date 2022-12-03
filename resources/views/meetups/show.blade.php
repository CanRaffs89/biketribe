{{-- SHOWs details for a single meetup --}}
<x-layout>
    <x-navbar></x-navbar>
    <div class="small-container">
        <div class="meetup-details-container">
            <div class="meetup-details-first">
                <h1>{{$meetup['name']}}</h1>
                <div class="meetup-details-image" style="background:url({{asset('img/' . $imgSrc)}}) no-repeat center/cover"></div>
                <p>{{$meetup['description']}}</p>
            </div>
            <div class="meetup-details-second">
                <div class="meetup-group-card">
                    <img src="{{asset('img/user.png')}}" alt="" class="meetup-details-group-img">
                    <div class="meetup-details-group">
                        <h4>Hosted by</h4>
                        <h3>{{$meetup->user->username}}</h3>
                    </div>
                </div>
                <ul class="meetup-details-info">
                    <li>{{$meetup['location']}}</li>
                    <li>{{$meetup['date']}}</li> 
                    <li>{{$meetup['time']}}</li> 
                </ul>
            </div>
        </div>
    </div>
</x-layout>