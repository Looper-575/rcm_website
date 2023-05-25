@component('mail::message')
    # New Lead from AtlantisRCM Website
    Name: {{$request->name}},
    Email: {{$request->email}},
    Service: {{$request->service}},
    Phone Number: {{$request->phone_number}},
    Date: {{$request->date}},
    Time: {{date('h:i:s a', strtotime($request->time))}},
    Time Zone: {{$request->time_zone}},

    {{ config('app.name') }}
@endcomponent