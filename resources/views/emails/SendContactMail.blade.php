@component('mail::message')
# New Contact Email Received from Your Website: FOSDA

Hello Admin, <br>
You have received a new contact email through the FOSDA website. Below are the details: <br><br>

@component('mail::table')
| Label       | Info         |
|-------------|:------------:|
| Name        | {{ $data['name'] }}      |
| Email       | {{ $data['email'] }}     |
| Phone       | {{ $data['phone'] }}     |
| Message     | {{ $data['message'] }}   |
@endcomponent

<br><br>

Please review the details and respond as necessary. <br><br>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
