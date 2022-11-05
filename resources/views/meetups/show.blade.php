{{-- <x-layout>
    <x-navbar></x-navbar>
    <div class="small-container">
        <div class="meetup-details-container">
            <div class="meetup-details-first">
                <h1>Beginners Ride</h1>
                <img class="meetup-details-image" src="" alt="">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum, a accusamus architecto velit necessitatibus asperiores facere itaque fugiat maxime numquam debitis repudiandae illo, pariatur similique dolores dolore tenetur iusto aut.</p>
            </div>
            <div class="meetup-details-second">
                <div class="meetup-group-card">
                    <img src="" alt="" class="meetup-details-group-img">
                    <div class="meetup-details-group">
                        <h4>Hosted by</h4>
                        <h3>London Fixed Gear Society</h3>
                    </div>
                </div>
                <ul class="meetup-details-info">
                    <li>London</li>
                    <li>Sat 27 Aug - 4:00PM</li> 
                    <li>
                        <ul class="meetup-tags-list">
                            <li class="meetup-tag"><a href="/">fixed</a></li>
                            <li class="meetup-tag"><a href="/">london</a></li>
                            <li class="meetup-tag"><a href="/">beginner</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-layout> --}}
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
                    <li>
                        <x-meetup-tags :tagsCsv="$meetup->tags" />
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-layout>