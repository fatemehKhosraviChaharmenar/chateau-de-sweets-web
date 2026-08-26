@extends('layouts.layout')
@section('content')
    <div class="contact-info">
        <h1>İletişim Bilgileri:</h1>
        <h3>ChâteaudeSweets@gmail.com</h3>
        <h3>+33 6 45 28 73 19</h3>
    </div>

    <div class="feedback-box">
        <h2>Bize Mesaj Atın</h2>
        <form method="post" action="{{route('sent')}}">
            @csrf
            <input type="text" placeholder="Adınız" name="name">
            <input type="text" placeholder="Soyadınız" name="surname">
            <input type="email" placeholder="E-posta" name="email">
            <textarea rows="4" placeholder="Mesajınız" name="message"></textarea>
            <button type="submit">Gönder</button>
        </form>
    </div>


@endsection
