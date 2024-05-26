@extends('layouts.index')

@section('content')
    <div class="container">
        <h1>Work Schedule for Next 30 Days</h1>
        {{$working}}
        <br>
        <br>
        <form action="{{ route('horarios.index') }}" method="GET">
            <label for="testTime">Test Time (HH:MM): </label>
            <input type="text" id="testTime" name="testTime" value="{{ old('testTime') }}">
            <button type="submit">Submit</button>
        </form>
        <br>
        <table class="table" style="display: inline-table; border-collapse: collapse;">
            <thead>
            <tr style="border-bottom: 1px solid #ccc;">
                <th style="padding: 8px;text-align: center;">Date</th>
                <th style="padding: 8px;text-align: center;">Working Hours</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($horarios as $horario)
                <tr style="border-bottom: 1px solid #ccc;">
                    <td style="padding: 8px; text-align: center;">{{ explode(';',$horario)[0] }}</td>
                    <td style="padding: 8px; text-align: center;">{{ explode(';',$horario)[1] }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
