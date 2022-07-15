@component('mail::message')

    Hello Admin,<br>
    You have received a new enquiry. Below are the details for your reference:<br>

    Name :{{ $name }} <br>
    Email :{{ $email }} <br>
    Subject :{{ $subject }} <br>
    Message :{{ $message }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
