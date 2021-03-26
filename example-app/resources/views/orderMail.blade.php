
# Introduction
<p>Тема: {{ $data['title'] }}</p>
<p>Hi, This is {{ $data['name'] }}</p>
<p>Мой телефон: {{ $data['tel'] }}</p>
<p>Моя почта: {{ $data['email'] }}</p>
<p>{{ $data['message'] }}.</p>
<p>It would be appriciative, if you gone through this feedback.</p>

Thanks,<br>
{{ config('app.name') }}
