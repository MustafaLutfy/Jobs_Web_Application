

<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
      
      
    <form method="POST" action="{{ route('create.offer') }}" enctype="multipart/form-data">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="requirments" :value="__('requirments')" />
            <textarea id="requirments" class="block max-h-[200px] border-2 border-gray-300 rounded-lg mt-1 w-full" type="text" name="requirments" :value="old('requirments')" required autofocus autocomplete="requirments" ></textarea>
            <x-input-error :messages="$errors->get('requirments')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="responsibilities" :value="__('responsibilities')" />
            <x-text-input id="responsibilities" class="block mt-1 w-full" type="text" name="responsibilities" :value="old('responsibilities')" required autofocus autocomplete="responsibilities" />
            <x-input-error :messages="$errors->get('responsibilities')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="salary" :value="__('salary')" />
            <div class="flex gap-3">
                <x-text-input id="salary" class="block mt-1 w-full" type="text" name="minSalary" placeholder="Min in $" :value="old('salary')" required autofocus autocomplete="salary" />
                <x-text-input id="salary" class="block mt-1 w-full" type="text" name="maxSalary" placeholder="Max in $" :value="old('salary')" required autofocus autocomplete="salary" />    
            </div>
            <x-input-error :messages="$errors->get('salary')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="work_time" :value="__('work_time')" />
            <x-text-input id="work_time" class="block mt-1 w-full" type="text" name="work_time" :value="old('work_time')" required autofocus autocomplete="work_time" />
            <x-input-error :messages="$errors->get('work_time')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="address" :value="__('address')" />
            <x-text-input id="pac-input" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>
        



        
        {{-- <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div> --}}
       
        <select name="job_title" id="job_title">

            @foreach ($jobs as $job)
              <option value="{{$job->job_title}}">{{$job->job_title}}</option>
            @endforeach

        </select>
            <x-primary-button class="ml-3">
                {{ __('Submit') }}
            </x-primary-button>
        </div>
    </form>
        

        <script>


            // $("#pac-input").focusin(function() {
            //     $(this).val('');
            // });
        
            // $('#latitude').val('');
            // $('#longitude').val('');
        
        
            // // This example adds a search box to a map, using the Google Place Autocomplete
            // // feature. People can enter geographical searches. The search box will return a
            // // pick list containing a mix of places and predicted search terms.
        
            // // This example requires the Places library. Include the libraries=places
            // // parameter when you first load the API. For example:
            // // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
        
            // function initAutocomplete() {
            //     var map = new google.maps.Map(document.getElementById('map'), {
            //         center: {lat: 33.76202372086447, lng: 44.590704989708335 },
            //         zoom: 13,
            //         mapTypeId: 'roadmap'
            //     });
        
               
            //     var geocoder = new google.maps.Geocoder();
            //     google.maps.event.addListener(map, 'click', function(event) {
            //         SelectedLatLng = event.latLng;
            //         geocoder.geocode({
            //             'latLng': event.latLng
            //         }, function(results, status) {
            //             if (status == google.maps.GeocoderStatus.OK) {
            //                 if (results[0]) {
            //                     deleteMarkers();
            //                     addMarkerRunTime(event.latLng);
            //                     SelectedLocation = results[0].formatted_address;
            //                     console.log( results[0].formatted_address);
            //                     splitLatLng(String(event.latLng));
            //                     $("#pac-input").val(results[0].formatted_address);
            //                 }
            //             }
            //         });
            //     });
            //     function geocodeLatLng(geocoder, map, infowindow,markerCurrent) {
            //         var latlng = {lat: markerCurrent.position.lat(), lng: markerCurrent.position.lng()};
            //         /* $('#branch-latLng').val("("+markerCurrent.position.lat() +","+markerCurrent.position.lng()+")");*/
            //         $('#latitude').val(markerCurrent.position.lat());
            //         $('#longitude').val(markerCurrent.position.lng());
        
            //         geocoder.geocode({'location': latlng}, function(results, status) {
            //             if (status === 'OK') {
            //                 if (results[0]) {
            //                     map.setZoom(8);
            //                     var marker = new google.maps.Marker({
            //                         position: latlng,
            //                         map: map
            //                     });
            //                     markers.push(marker);
            //                     infowindow.setContent(results[0].formatted_address);
            //                     SelectedLocation = results[0].formatted_address;
            //                     $("#pac-input").val(results[0].formatted_address);
        
            //                     infowindow.open(map, marker);
            //                 } else {
            //                     window.alert('No results found');
            //                 }
            //             } else {
            //                 window.alert('Geocoder failed due to: ' + status);
            //             }
            //         });
            //         SelectedLatLng =(markerCurrent.position.lat(),markerCurrent.position.lng());
            //     }
            //     function addMarkerRunTime(location) {
            //         var marker = new google.maps.Marker({
            //             position: location,
            //             map: map
            //         });
            //         markers.push(marker);
            //     }
            //     function setMapOnAll(map) {
            //         for (var i = 0; i < markers.length; i++) {
            //             markers[i].setMap(map);
            //         }
            //     }
            //     function clearMarkers() {
            //         setMapOnAll(null);
            //     }
            //     function deleteMarkers() {
            //         clearMarkers();
            //         markers = [];
            //     }
        
            //     // Create the search box and link it to the UI element.
            //     var input = document.getElementById('pac-input');
            //     $("#pac-input").val("أبحث هنا ");
            //     var searchBox = new google.maps.places.SearchBox(input);
            //     map.controls[google.maps.ControlPosition.TOP_RIGHT].push(input);
        
            //     // Bias the SearchBox results towards current map's viewport.
            //     map.addListener('bounds_changed', function() {
            //         searchBox.setBounds(map.getBounds());
            //     });
        
            //     var markers = [];
            //     // Listen for the event fired when the user selects a prediction and retrieve
            //     // more details for that place.
            //     searchBox.addListener('places_changed', function() {
            //         var places = searchBox.getPlaces();
        
            //         if (places.length == 0) {
            //             return;
            //         }
        
            //         // Clear out the old markers.
            //         markers.forEach(function(marker) {
            //             marker.setMap(null);
            //         });
            //         markers = [];
        
            //         // For each place, get the icon, name and location.
            //         var bounds = new google.maps.LatLngBounds();
            //         places.forEach(function(place) {
            //             if (!place.geometry) {
            //                 console.log("Returned place contains no geometry");
            //                 return;
            //             }
            //             var icon = {
            //                 url: place.icon,
            //                 size: new google.maps.Size(100, 100),
            //                 origin: new google.maps.Point(0, 0),
            //                 anchor: new google.maps.Point(17, 34),
            //                 scaledSize: new google.maps.Size(25, 25)
            //             };
        
            //             // Create a marker for each place.
            //             markers.push(new google.maps.Marker({
            //                 map: map,
            //                 icon: icon,
            //                 title: place.name,
            //                 position: place.geometry.location
            //             }));
        
        
            //             $('#latitude').val(place.geometry.location.lat());
            //             $('#longitude').val(place.geometry.location.lng());
        
            //             if (place.geometry.viewport) {
            //                 // Only geocodes have viewport.
            //                 bounds.union(place.geometry.viewport);
            //             } else {
            //                 bounds.extend(place.geometry.location);
            //             }
            //         });
            //         map.fitBounds(bounds);
            //     });
            // }
            // function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            //     infoWindow.setPosition(pos);
            //     infoWindow.setContent(browserHasGeolocation ?
            //         'Error: The Geolocation service failed.' :
            //         'Error: Your browser doesn\'t support geolocation.');
            //     infoWindow.open(map);
            // }
            // function splitLatLng(latLng){
            //     var newString = latLng.substring(0, latLng.length-1);
            //     var newString2 = newString.substring(1);
            //     var trainindIdArray = newString2.split(',');
            //     var lat = trainindIdArray[0];
            //     var Lng  = trainindIdArray[1];
        
            //     $("#latitude").val(lat);
            //     $("#longitude").val(Lng);
            // }
        </script>
        












</x-guest-layout>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBG_umtIa7hqoi4nKE4o2kvqVfZZim2YLs&libraries=places&callback=initAutocomplete&language=ar&region=IQ
async defer"></script> 
