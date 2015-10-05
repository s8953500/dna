@extends('app')
@section('content')
    @include('partials.navbar')
    <h1>Add Batches to Run</h1>
    <div class="table-container">
        {!! Form::open(['url'=>'sampleRuns', 'class'=>'form-inline']) !!}
        <table class="table table-striped">
            <thead>
            <tr>
                <th></th>
                <th>Batch id</th>
                <th>Batch name</th>
                <th>i7 Length</th>
                <th>i5 Length</th>
                <th>Number samples</th>

            </tr>
            </thead>

            @foreach($batches as $batch)
                <?php

                $first_i7_lenghth = strlen($batch->samples[0]->i7_index->sequence);

                if (count($batch->samples[0]->i5_index_id) != NULL) {
                    $first_i5_lenghth = strlen($batch->samples[0]->i5_index->sequence);
                } else $first_i5_lenghth = 0;
                ?>
                <tr>
                    {{-- Check box when changed calls javascirpt in partials/batchCompatibilityJS.blade.php --}}
                    {{-- to validate compatability--}}
                    <td><input name="batch_check_id[]" id="batch_check_id" type="checkbox" value="{{($batch->id)}}"
                               onchange="checkSelectedBatches()"/></td>
                    <td> {{ $batch->id }} </td>
                    <td><a href="/batches/{{($batch->id)}} ">{{ ($batch->batch_name) }} </a></td>
                    <td> {{ $first_i7_lenghth }}    </td>
                    <td> {{ $first_i5_lenghth }}    </td>
                    <td> {{ count($batch->samples)}}</td>

                </tr>

            @endforeach


        </table>


        <span style="color: red">
            {!! Form::label('errors_label', ' ', [ 'id'=>'errors_label'] ) !!}
        </span>
        <br/>

        <div class="col-lg-offset-1">
            {!! Form::submit("Next -> Enter run details", ['class'=>'btn btn-primary']) !!}
        </div>

        <br/>
        {!! Form::close() !!}

    </div>

    @include('errors.list')

@endsection

@section('footer')
    @include('partials.batchCompatibilityJS')
@endsection

