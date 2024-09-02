@component('mail::message')
Hello {{$user->name}},

<p>we understand it happens. </p>

@component('mail::button', ['url' => url('reset/'.$user->remember_token)])
Reset Your Password

@endcomponent

<p>In case you have any issue recovering your password, please contact us.</P>

Thanks,<br>
{{config('app.name')}}

@endcomponent