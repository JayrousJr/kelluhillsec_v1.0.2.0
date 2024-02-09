<x-mail::message>
    Hello dear <strong>{{$name}}</strong>,<br>
    Your Message has been sent successiful!<br><br>
    Thank You for contacting {{ config('app.name') }}.

    <x-mail::button :url="'https://www.kellusec.ac.tz'">
        Go to The Site
    </x-mail::button>

</x-mail::message>