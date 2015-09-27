@extends('app')
@section('content')
    @include('partials.navbar')
    <a href='/'>@include('partials.logo')</a>



    <br/>
    <h3>Chemistry</h3>
    <div class ="table-container">

    <table class="table table-striped">
        <tr>
            <th>Chemistry</th>
            <th>Default</th>

        </tr>
        @foreach ($chemistry as $chem)
            <tr>
                <td>{{($chem->chemistry)}}</td>
                <td>{{($chem->default)}}</td>

            </tr>
        @endforeach
    </table>
</div>
@endsection

@section('footer')

@endsection