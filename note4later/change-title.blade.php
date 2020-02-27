
  <title>
  @isset($title)
            {{ $title }} | 
        @endisset
        {{ config('app.name') }}
  </title>


<!-- ---------------------------- -->
  @extends('candidates.layouts.candidate-create',['title' => 'Đăng ký ứng tuyển'])
