@extends("welcome")

@section("main")
    <form method="post" action="{{ route('addBooking') }}">
        @csrf
        <label for="Name">Your name:</label>
        <input type="text" name="name" id="name" required="required" />

        <label for="E-mail">Email adress:</label>
        <input type="e-mail" name="E-mail" id="E-mail" requred ="required" />

        <label for="Cat">Cat name:</label>
        <input type="text" name="Cat" id="Cat" requred ="required" />

        <label for="Arrangement">Arrangement type:</label>
        <select id="Arrangement" name="Arrangement">
            @foreach ($arrangements as $arrangement)
                <option value="{{ $arrangement -> id }}"> {{ $arrangement -> title }} </option>
            @endforeach
        </select>
        
        <label for="Date">Date:</label>
        <input type="date" name="Date" id="Date" required="required" />

        <input type="submit" value="Book now" />
@endsection