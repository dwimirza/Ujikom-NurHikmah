@extends('layouts.app')

@section('content')

<!-- @for ($i = 0; $i < 10; $i++)
    The current value is {{ $i }}
@endfor -->

<form method="post" action="{{route('exam.store')}}">
	{{ csrf_field() }}

	<div class="col-md-6 col-lg-6 col-sm-6 col-lg-offset-3">
	  <div class="form-group">
	    <label class="col-form-label" for="formGroupExampleInput2">Course Name</label>
	    <input type="text" name="materi" class="form-control" id="formGroupExampleInput2" placeholder="example:SWE111" required>
	  </div>
	  <div class="form-group">
	    <label class="col-form-label" for="formGroupExampleInput2">Set time</label>
	    <input type="text" name="waktu" class="form-control" id="formGroupExampleInput2" placeholder="Enter In Minite" required>
	  </div>
	  <div class="form-group">
	    <input type="hidden" value="{{substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 5)}}" name="uniqueid" class="form-control" id="formGroupExampleInput2">
	  </div>
	  <button type="Submit" class="btn btn-success btn-block">Submit</button>
	</div>

</form>

    @endsection
