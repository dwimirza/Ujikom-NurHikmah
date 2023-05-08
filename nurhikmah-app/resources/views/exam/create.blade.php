@extends('exam.navexam')

@section('title', 'Buat Materi Ujian')

@section('content')

<!-- @for ($i = 0; $i < 10; $i++)
    The current value is {{ $i }}
@endfor -->

<section class="materi vh-100 d-flex justify-content-center align-items-center" style="justify-self: center;">
        <div class="card col-11 col-md-9 col-xl-7" style="margin-bottom: 200px; padding-top: 50px; padding-bottom: 50px; padding-left: 58px; padding-right: 58px;">
            <form method="post" class="" action="{{route('exam.store')}}">
            {{ csrf_field() }}
                <div class="w-100">
                  <div class="form-group" >
                    <label class="col-form-label" for="formGroupExampleInput2" style="font-size: 1.5em; font-weight: 500; margin-bottom: 10px;">Course Name</label>
                    <input type="text" name="materi" class="form-control" id="formGroupExampleInput2" placeholder="eg: Matematika/IPA/IPS/etc" required style="background-color: var(--bg-layout); height: 55px; font-size: larger; margin-bottom: 15px;">
                  </div>
                  <div class="form-group" >
                    <label class="col-form-label" for="formGroupExampleInput2" style="font-size: 1.5em; font-weight: 500; margin-bottom: 10px;">Set time</label>
                    <input type="text" name="waktu" class="form-control" id="formGroupExampleInput2" placeholder="Enter In Minite, eg: 60" required style="background-color: var(--bg-layout); height: 55px; font-size: larger; margin-bottom: 25px;">
                  </div>
                  <div class="form-group">
                    <input type="hidden" value="{{substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 5)}}" name="uniqueid" class="form-control" id="formGroupExampleInput2">
                  </div>
                  <div class="d-flex justify-content-center align-items-center">
                    <button type="Submit" class="btn btn-success btn-block text-white" style="height: 60px; width: 225px; font-size: 20px; font-weight: 500; justify-content: center; display: flex; align-items: center;">Buat Ujian</button>
                  </div>
                </div>
            
            </form>
        </div>
    </section>

    @endsection
