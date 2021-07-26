@extends('layouts.back-main')

@section('title','Edit Permintaan Laboratorium')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">

    </div>
    <!-- /.content-header -->
    <section class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title font-weight-bold">
                                Edit Permintaan Laboratorium
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('laboratorium.update',$lab->id_lab)}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="form1-tab" data-toggle="tab" href="#form1" role="tab">Data Pasien</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="form2-tab" data-toggle="tab" href="#form2" role="tab">Hematologi</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="form3-tab" data-toggle="tab" href="#form3" role="tab">Kimia Klinik</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="form4-tab" data-toggle="tab" href="#form4" role="tab">Urine</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="form5-tab" data-toggle="tab" href="#form5" role="tab">Serologi & Rapid</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="form1" role="tabpanel" aria-labelledby="form1-tab">
                                        @include('backend.laboratorium.form-edit.formulir1')
                                    </div>
                                    <div class="tab-pane fade" id="form2" role="tabpanel" aria-labelledby="form2-tab">
                                        @include('backend.laboratorium.form-edit.formulir2')
                                    </div>
                                    <div class="tab-pane fade" id="form3" role="tabpanel" aria-labelledby="form3-tab">
                                        @include('backend.laboratorium.form-edit.formulir3')
                                    </div>
                                    <div class="tab-pane fade" id="form4" role="tabpanel" aria-labelledby="form4-tab">
                                        @include('backend.laboratorium.form-edit.formulir4')
                                    </div>
                                    <div class="tab-pane fade" id="form5" role="tabpanel" aria-labelledby="form5-tab">
                                        @include('backend.laboratorium.form-edit.formulir5')
                                    </div>
                                    <hr>
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $("#pasien_id").on("change",function(){
            var pasien_id = $(this).val();
            //console.log(id);
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: "/laboratorium/getpasien",
                data:{'id':pasien_id},
                success: function(data){
                    $.each(data, function(key, value){
                        $('input[name="jenis_kelamin"]').val(data.jenis_kelamin);
                        $('input[name="tanggal_lahir"]').val(data.tanggal_lahir);
                        $('textarea[name="alamat"]').val(data.alamat);
                    });
                }
            });
        });
    </script>
@endpush
