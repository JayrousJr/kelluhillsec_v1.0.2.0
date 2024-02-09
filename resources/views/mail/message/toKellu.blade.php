<x-mail::message>
    # Introduction

    Hello, You have received a message from <strong>{{$name}}</strong>,<br>
    Email: {{$email}}<br>
    Message says: <br>{{$message}}

    <x-mail::button :url="'https://www.kellusec.ac.tz'">
        Go to The Site
    </x-mail::button>

</x-mail::message>