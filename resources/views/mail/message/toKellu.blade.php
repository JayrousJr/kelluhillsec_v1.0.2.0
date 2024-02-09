<x-mail::message>
    # Introduction

    Hello, You have received a message from {{$name}},<br>
    Email: {{$email}}<br>
    Message says: <br>{{$message}}

    <x-mail::button :url="'https://www.kellusec.ac.tz'">
        Go to The Site
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>