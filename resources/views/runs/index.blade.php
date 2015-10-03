@extends('app')
@section('content')
@include('partials.navbar')
<h3>Runs</h3>
    <div class="table-container">
    <table class="table table-striped">
    <thead>
        <tr>
            <th>Run id</th>
            <th>Experiment name</th>
            <th>Read 1</th>
            <th>Read 2</th>
            <th>Description</th>
            <th>Flow Cell</th>
            <th>Date</th>
            <th>Status</th>
            <th>Adaptor</th>
            <th>Chemistry</th>
            <th>Project</th>
            <th>User</th>

            <th>Assay</th>
            <th>Instrument</th>
            <th>Work Flow</th>


        </tr>
    </thead>
    @foreach ($runs as $run)
    <tr>
      <td><a href="/runs/{{ $run->id }}/edit">{{ $run->id }}</a></td>

        <td>{{ $run->experiment_name}}</td>
        <td>{{ $run->read1}}</td>
        <td>{{ $run->read2}}</td>
        <td>{{ $run->description}}</td>
        <td>{{ $run->flow_cell}}</td>
        <td>{{ Carbon\Carbon::parse($run->run_date)->format('d M Y')}}</td>
        <td>{{ $run->run_status->status}}</td>
        <td>{{ $run->adaptor->value}}</td>
        <td>{{ $run->chemistry->chemistry}}</td>
        <td>{{ $run->project_group->name}}</td>
        <td>{{ $run->users->name}}</td>

        <td>{{ $run->assay->name}}</td>
        <td>{{ $run->instrument->name}}</td>
        <td>{{ $run->work_flow->value}}</td>

    </tr>
    @endforeach

    </table>
    </div>
@endsection
