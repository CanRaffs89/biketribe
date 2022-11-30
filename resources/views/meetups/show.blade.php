<x-layout>
    <x-navbar></x-navbar>
    <div class="small-container">
        <div class="meetup-details-container">
            <div class="meetup-details-first">
                <h1>{{$meetup['name']}}</h1>
                <img class="meetup-details-image" src="" alt="">
                <p>{{$meetup['description']}}</p>
            </div>
            <div class="meetup-details-second">
                <div class="meetup-group-card">
                    <img src="{{asset('img/user.png')}}" alt="" class="meetup-details-group-img">
                    <div class="meetup-details-group">
                        <h4>Hosted by</h4>
                        <h3>{{$meetup['host']}}</h3>
                    </div>
                </div>
                <ul class="meetup-details-info">
                    <li>{{$meetup['location']}}</li>
                    <li>Sat 27 Aug - 4:00PM</li> 
                </ul>
            </div>
        </div>
    </div>
</x-layout>