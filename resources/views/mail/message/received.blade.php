<x-mail::message>
    Hello dear <strong>{{$name}}</strong>,<br>
    Your Message has been sent successiful!<br><br>
    Be a great Customer by letting people know of our service at {{ config('app.name') }}.<br>

    <x-mail::button :url="'https://www.kellusec.ac.tz'">
        Go to The WebSite
    </x-mail::button>

    Thank You for contacting {{ config('app.name') }}.
</x-mail::message>