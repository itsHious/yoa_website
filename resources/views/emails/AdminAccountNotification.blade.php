<x-mail::message>

# 🎉 Welcome to YOA Website Portal! 🎉

Dear {{ $data['name'] }}, <br>
We are thrilled to welcome you to the our platform! <br>

Please find your login credentials below <br>

<x-mail::panel>
Email: {{ $data['email'] }} <br>
Passord: {{ $data['password'] }}
</x-mail::panel>

<x-mail::button :url="route('login')">
Go To Dashboard
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
