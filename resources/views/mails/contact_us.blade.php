@component('mail::message')
# Contact Us

A new message from {{$name}}<br><br>

Name : {{$name}}<br>
E-mail : {{$email}}<br>
Phone Number : {{$phone}}<br>
Message : {{$message}}

Thanks,<br>
@endcomponent
