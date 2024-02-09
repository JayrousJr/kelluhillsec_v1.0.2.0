<x-mail::message>
    Hello dear {{$name}},<br>
    Your Message has been sent successiful!<br>
    Thank You for contacting Techclouds.

    <x-mail::button :url="'https://www.kellusec.ac.tz'">
        Go to The Site
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>