<form action="search">
    <div class="search-container">
        <input type="text" name="search" placeholder="Search for cycling meet-ups near you..." value="{{ request()->get('search') }}"/>
        @error('search')
            <p class="message-text message-fail">Please enter a search term</p>
        @enderror
        <div class="search-button-container">
            <button type="submit">Search</button>
        </div>
    </div>
</form>