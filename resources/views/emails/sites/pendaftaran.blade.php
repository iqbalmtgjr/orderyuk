<x-mail::message>
    # Registrasi Akun OrderYuk!!!

    Hai {{ $user->nickname }}
    Selamat anda telah terdaftar di Aplikasi OrderYuk!!!.
    Untuk Password silahkan gunakan {{ $make_password }}

    Terima Kasih,
    {{ config('app.name') }}
</x-mail::message>
