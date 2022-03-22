@extends('firebase.app')

@section('content')
@if(session()->has('status'))
<div class="col-lg-7">
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
</div>
@endif

<div class="container">
    <h2>Dumetschool</h2>
    <p>Pilih Paket Kursus:</p>            
      <div id="example-optionClass-container">
          <select id="example-optionClass" multiple="multiple">
              <option value="1">WM Ultimate</option>
              <option value="2">WM Professional</option>
              <option value="3">WM Premium</option>
              <option value="4">GD Professional</option>
              <option value="5">GD Ultimate</option>
              <option value="6">GD Premium</option>
          </select>
      </div>
  </div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <video id="preview" width="100%"></video>
        </div>
        <div class="col-md-6">
            <form action="{{ url('scanqrcode') }}" method="POST">
                @csrf
                <label>Scan Qr Code</label>
                <input type="text" id="text" name="nim" readonly placeholder="scan qrcode" class="form-control">
            </form>
        </div>
    </div>
</div>
@endsection

